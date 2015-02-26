<?php

namespace QBNK\QBank\API\Controller;

use Doctrine\Common\Cache\Cache;
use GuzzleHttp\Client;
use GuzzleHttp\Event\CompleteEvent;
use GuzzleHttp\Event\ErrorEvent;
use GuzzleHttp\Message\RequestInterface;
use GuzzleHttp\Message\ResponseInterface;
use GuzzleHttp\Pool;
use GuzzleHttp\Post\PostBodyInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use QBNK\QBank\API\CachePolicy;
use QBNK\QBank\API\Exception\RequestException;
use QBNK\QBank\API\Exception\ResponseException;

abstract class ControllerAbstract implements LoggerAwareInterface
{
    const METHOD_GET    = 'get';
    const METHOD_POST   = 'post';
    const METHOD_PUT    = 'put';
    const METHOD_DELETE = 'delete';

    /** @var Client $client */
    protected $client;

    /** @var LoggerInterface $logger */
    protected $logger;

    /** @var CachePolicy */
    protected $cachePolicy;

    /** @var Cache */
    protected $cache;

    /** @var RequestInterface[]  */
    protected $delayedRequests;

    public function __construct(Client $client, CachePolicy $cachePolicy, Cache $cache = null)
    {
        $this->client          = $client;
        $this->cachePolicy     = $cachePolicy;
        $this->cache           = $cache;
        $this->delayedRequests = [];
    }

    protected function call($endpoint, array $parameters = [], $method = self::METHOD_GET, CachePolicy $cachePolicy = null, $delayed = false)
    {
        $cachePolicy = ($cachePolicy !== null) ? $cachePolicy : $this->cachePolicy;

        if ($delayed) {
            $this->delayedRequests[] = $this->client->createRequest(strtoupper($method), $endpoint, $parameters);
            $this->logger->debug(
                'Request to QBank added to delayed queue. '.strtoupper($method).' '.$endpoint,
                [
                    'endpoint'   => $endpoint,
                    'parameters' => $parameters,
                    'method'     => $method,
                ]
            );

            return [];
        }

        if ($cachePolicy->isEnabled() && $method == self::METHOD_GET
            && $this->cache->contains(md5($endpoint.json_encode($parameters)))) {
            /** @var string $response */
            $response = $this->cache->fetch(md5($endpoint.json_encode($parameters)));
            $this->logger->info(
                'Using cached response. '.strtoupper($method).' '.$endpoint,
                [
                    'endpoint'   => $endpoint,
                    'parameters' => $parameters,
                    'method'     => $method,
                    'response'   => substr($response, 0, 4096),
                ]
            );

            return $this->cache->fetch(md5($endpoint.json_encode($parameters)));
        }

        try {
            /** @var ResponseInterface $response */
            $response = $this->client->{$method}($endpoint, $parameters);
            $this->logger->debug(
                'Request to QBank sent. '.strtoupper($method).' '.$endpoint,
                [
                    'endpoint'   => $endpoint,
                    'parameters' => $parameters,
                    'method'     => $method,
                    'response'   => substr($response->getBody(), 0, 4096),
                ]
            );
            if (!in_array('application/json', array_map('trim', explode(';', $response->getHeader('Content-type'))))) {
                $this->logger->error(
                    'Error while receiving response from QBank. '.strtoupper($method).' '.$endpoint,
                    [
                        'message'    => 'Response not in json format.',
                        'endpoint'   => $endpoint,
                        'parameters' => $parameters,
                        'method'     => $method,
                        'response'   => substr($response->getBody(), 0, 4096),
                    ]
                );
                throw new ResponseException('Error while receiving response from QBank: Response not in json format.');
            }

            if ($cachePolicy->isEnabled() && $method == self::METHOD_GET) {
                $this->cache->save(md5($endpoint.json_encode($parameters)), $response->json(), $cachePolicy->getLifetime());
            }

            return $response->json();
        } catch (\GuzzleHttp\Exception\RequestException $re) {
            $this->logger->error(
                'Error while sending request to QBank. '.strtoupper($method).' '.$endpoint,
                [
                    'exception'  => $re,
                    'message'    => $re->getMessage(),
                    'endpoint'   => $endpoint,
                    'parameters' => $parameters,
                    'method'     => $method,
                    'response'   => $re->hasResponse() ? substr($re->getResponse()->getBody(), 0, 4096) : '',
                ]
            );
            throw new RequestException(
                'Error while sending request to QBank: '.$re->getMessage(),
                $re->hasResponse() ? $re->getResponse()->getStatusCode() : 0,
                $re
            );
        }
    }

    protected function get($endpoint, array $parameters = [], CachePolicy $cachePolicy = null, $delayed = false)
    {
        return $this->call($endpoint, $parameters, self::METHOD_GET, $cachePolicy, $delayed);
    }

    protected function post($endpoint, array $parameters = [], CachePolicy $cachePolicy = null, $delayed = false)
    {
        return $this->call($endpoint, $parameters, self::METHOD_POST, $cachePolicy, $delayed);
    }

    protected function put($endpoint, array $parameters = [], CachePolicy $cachePolicy = null, $delayed = false)
    {
        return $this->call($endpoint, $parameters, self::METHOD_PUT, $cachePolicy, $delayed);
    }

    protected function delete($endpoint, array $parameters = [], CachePolicy $cachePolicy = null, $delayed = false)
    {
        return $this->call($endpoint, $parameters, self::METHOD_DELETE, $cachePolicy, $delayed);
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __destruct()
    {
        flush();
        if (!empty($this->delayedRequests)) {
            $pool = new Pool(
                $this->client,
                $this->delayedRequests,
                [
                    'pool_size' => count($this->delayedRequests),
                    'complete'  => [
                        'fn' => function (CompleteEvent $event) {
                            $this->logger->debug(
                                'Delayed request to QBank sent. '
                                    .strtoupper($event->getRequest()->getMethod()).' '.$event->getRequest()->getPath(),
                                [
                                    'endpoint'   => $event->getRequest()->getPath(),
                                    'parameters' => ($event->getRequest()->getBody() instanceof PostBodyInterface)
                                        ? $event->getRequest()->getBody()->getFields() : [],
                                    'method'   => $event->getRequest()->getMethod(),
                                    'response' => $event->hasResponse() ? substr($event->getResponse()->getBody(), 0, 4096) : '',
                                ]
                            );
                        },
                        'once' => true,
                    ],
                    'error' => [
                        'fn' => function (ErrorEvent $event) {
                            $this->logger->warning(
                                'Error while sending delayed request to QBank: '.$event->getException()->getMessage(),
                                [
                                    'endpoint'   => $event->getRequest()->getPath(),
                                    'parameters' => ($event->getRequest()->getBody() instanceof PostBodyInterface)
                                        ? $event->getRequest()->getBody()->getFields() : [],
                                    'method'   => $event->getRequest()->getMethod(),
                                    'response' => $event->hasResponse() ? substr($event->getResponse()->getBody(), 0, 4096) : '',
                                ]
                            );
                        },
                        'once' => true,
                    ],
                ]
            );
            $pool->wait();
        }
    }
}
