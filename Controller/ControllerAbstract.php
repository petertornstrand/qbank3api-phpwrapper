<?php

namespace QBNK\QBank\API\Controller;

use Doctrine\Common\Cache\Cache;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\CurlMultiHandler;
use GuzzleHttp\Promise;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use QBNK\QBank\API\CachePolicy;
use QBNK\QBank\API\Exception\RequestException;
use QBNK\QBank\API\Exception\ResponseException;

abstract class ControllerAbstract implements LoggerAwareInterface
{
    const METHOD_GET = 'get';
    const METHOD_POST = 'post';
    const METHOD_PUT = 'put';
    const METHOD_DELETE = 'delete';

    /** @var Client $client */
    protected $client;

    /** @var LoggerInterface $logger */
    protected $logger;

    /** @var CachePolicy */
    protected $cachePolicy;

    /** @var Cache */
    protected $cache;

    /** @var Promise\PromiseInterface[] */
    protected $delayedRequests;

    /** @var CurlMultiHandler */
    protected $handler;

    public function __construct(Client $client, CachePolicy $cachePolicy, Cache $cache = null, $handler = null)
    {
        $this->client = $client;
        $this->cachePolicy = $cachePolicy;
        $this->cache = $cache;
        $this->handler = $handler;
        $this->delayedRequests = [];
    }

    /**
     * Performs a request to the QBank API.
     *
     * @param string      $endpoint    The API endpoint URL to request.
     * @param array       $parameters  The parameters to send.
     * @param string      $method      The HTTP verb to use.
     * @param CachePolicy $cachePolicy The custom caching policy to use.
     * @param bool        $delayed     If the request should be delayed until destruction.
     *
     * @return array The response result.
     *
     * @throws \QBNK\QBank\API\Exception\RequestException  Thrown if there was something wrong with the request.
     * @throws \QBNK\QBank\API\Exception\ResponseException Thrown if there was something wrong with the response.
     */
    protected function call($endpoint, array $parameters = [], $method = self::METHOD_GET, CachePolicy $cachePolicy = null, $delayed = false)
    {
        $cachePolicy = (null !== $cachePolicy) ? $cachePolicy : $this->cachePolicy;

        if ($delayed) {
            $this->delayedRequests[] = $this->client->requestAsync(strtoupper($method), $endpoint, $parameters);
            $this->handler->execute();
            $this->logger->debug(
                'Request to QBank added to delayed queue. ' . strtoupper($method) . ' ' . $endpoint,
                [
                    'endpoint' => $endpoint,
                    'parameters' => $parameters,
                    'method' => $method,
                ]
            );

            return [];
        }

        if (
            $cachePolicy->isEnabled()
            && (self::METHOD_GET === $method || (self::METHOD_POST === $method && preg_match('/v\d+\/search/', $endpoint)))
            && $this->cache->contains(md5($endpoint . json_encode($parameters)))
        ) {
            /** @var array $response */
            $response = $this->cache->fetch(md5($endpoint . json_encode($parameters)));
            $this->logger->info(
                'Using cached response. ' . strtoupper($method) . ' ' . $endpoint,
                [
                    'endpoint' => $endpoint,
                    'parameters' => $parameters,
                    'method' => $method,
                    'response' => substr(print_r($response, true), 0, 4096),
                ]
            );

            return $response;
        }

        try {
            $start = microtime(true);
            /** @var ResponseInterface $response */
            $response = $this->client->{$method}($endpoint, $parameters);
            $this->logger->debug(
                'Request to QBank sent. ' . strtoupper($method) . ' ' . $endpoint,
                [
                    'endpoint' => $endpoint,
                    'parameters' => $parameters,
                    'time' => number_format(round((microtime(true) - $start) * 1000), 0, '.', ' ') . ' ms',
                    'method' => $method,
                    'response' => substr($response->getBody()->__toString(), 0, 4096),
                ]
            );

            $data = null;
            if (in_array('application/json', array_map('trim', explode(';', $response->getHeader('Content-type')[0])), false)
                && !empty($response->getBody()->__toString())) {
                try {
                    $data = \GuzzleHttp\json_decode($response->getBody()->__toString(), true);
                } catch (\Exception $re) {
                    $this->logger->error(
                        'Error while receiving response from QBank. ' . strtoupper($method) . ' ' . $endpoint,
                        [
                            'message' => $re->getMessage(),
                            'endpoint' => $endpoint,
                            'parameters' => $parameters,
                            'method' => $method,
                            'response' => substr($response->getBody()->__toString(), 0, 4096),
                        ]
                    );
                    throw new ResponseException('Error while receiving response from QBank: ' . $re->getMessage());
                }
            } else {
                return $response->getBody()->__toString();
            }

            if (
                $cachePolicy->isEnabled() && CachePolicy::EVERYTHING === $cachePolicy->getCacheType()
                && (self::METHOD_GET === $method || (self::METHOD_POST === $method && preg_match('/v\d+\/search/', $endpoint)))
            ) {
                $this->cache->save(md5($endpoint . json_encode($parameters)), $data, $cachePolicy->getLifetime());
            }

            return $data;
        } catch (\GuzzleHttp\Exception\RequestException $re) {
            $this->logger->error(
                'Error while sending request to QBank. ' . strtoupper($method) . ' ' . $endpoint,
                [
                    'exception' => $re,
                    'message' => $re->getMessage(),
                    'endpoint' => $endpoint,
                    'parameters' => $parameters,
                    'method' => $method,
                    'response' => $re->hasResponse() ? substr($re->getResponse()->getBody()->__toString(), 0, 4096) : '',
                ]
            );
            $message = null;
            $details = null;
            if ($re->hasResponse() && 0 === strpos($re->getResponse()->getHeader('Content-type')[0], 'application/json')) {
                $content = json_decode($re->getResponse()->getBody()->__toString(), true);
                if (!empty($content['error'])) {
                    $details = $content['error'];
                }
                if (isset($content['error']['message'])) {
                    $message = ' [info]' . $content['error']['message'];
                }
                if (isset($content['error']['errors']) && is_array($content['error']['errors'])) {
                    foreach ($content['error']['errors'] as $key => $error) {
                        $message .= "\n\t$key: $error";
                    }
                }
            }
            throw new RequestException(
                'Error while sending request to QBank: ' . $re->getMessage() . $message,
                $re->hasResponse() ? $re->getResponse()->getStatusCode() : 0,
                $re,
                $details
            );
        }
    }

    /**
     * Shorthand for sending a GET request to the API.
     *
     * @param string      $endpoint    The API endpoint URL to request.
     * @param array       $parameters  The parameters to send.
     * @param CachePolicy $cachePolicy The custom caching policy to use.
     * @param bool        $delayed     If the request should be delayed until destruction.
     *
     * @return array The response result.
     *
     * @throws RequestException
     * @throws ResponseException
     */
    protected function get($endpoint, array $parameters = [], CachePolicy $cachePolicy = null, $delayed = false)
    {
        return $this->call($endpoint, $parameters, self::METHOD_GET, $cachePolicy, $delayed);
    }

    /**
     * Shorthand for sending a POST request to the API.
     *
     * @param string $endpoint   The API endpoint URL to request.
     * @param array  $parameters The parameters to send.
     * @param bool   $delayed    If the request should be delayed until destruction.
     *
     * @return array The response result.
     *
     * @throws RequestException
     * @throws ResponseException
     */
    protected function post($endpoint, array $parameters = [], $delayed = false)
    {
        return $this->call($endpoint, $parameters, self::METHOD_POST, null, $delayed);
    }

    /**
     * Shorthand for sending a PUT request to the API.
     *
     * @param string $endpoint   The API endpoint URL to request.
     * @param array  $parameters The parameters to send.
     * @param bool   $delayed    If the request should be delayed until destruction.
     *
     * @return array The response result.
     *
     * @throws RequestException
     * @throws ResponseException
     */
    protected function put($endpoint, array $parameters = [], $delayed = false)
    {
        return $this->call($endpoint, $parameters, self::METHOD_PUT, null, $delayed);
    }

    /**
     * Shorthand for sending a DELETE request to the API.
     *
     * @param string $endpoint   The API endpoint URL to request.
     * @param array  $parameters The parameters to send.
     * @param bool   $delayed    If the request should be delayed until destruction.
     *
     * @return array The response result.
     *
     * @throws RequestException
     * @throws ResponseException
     */
    protected function delete($endpoint, array $parameters = [], $delayed = false)
    {
        return $this->call($endpoint, $parameters, self::METHOD_DELETE, null, $delayed);
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __destruct()
    {
        if (ob_get_length()) {
            ob_end_flush();
        }

        flush();
        if (!empty($this->delayedRequests)) {
            $results = Promise\settle($this->delayedRequests)->wait();
            foreach ($results as $index => $result) {
                switch ($result['state']) {
                    case Promise\PromiseInterface::FULFILLED:
                        $response = $result['value'];
                        $this->logger->debug(
                            'Delayed request to QBank sent. ',
                            [
                                'response' => substr($response->getBody()->__toString(), 0, 4096),
                            ]
                        );
                        break;
                    case Promise\PromiseInterface::REJECTED:
                        $this->logger->warning(
                            'Error while sending delayed request to QBank: ' . $result['reason']
                        );
                        break;
                }
            }
        }
    }
}
