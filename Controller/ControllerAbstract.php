<?php
namespace QBNK\QBank\API\Controller;

use CommerceGuys\Guzzle\Plugin\Oauth2\Oauth2Plugin;
use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Http\Client;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Message\EntityEnclosingRequest;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Exception\RequestException;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use QBNK\QBank\API\QBankApiException;
use QBNK\QBank\API\QBankCachePolicy;
use Doctrine\Common\Cache\Cache;


abstract class ControllerAbstract implements LoggerAwareInterface {
	const METHOD_GET = 'get';
	const METHOD_POST = 'post';
	const METHOD_PUT = 'put';

	/** @var \Guzzle\Http\Client $client */
	protected $client;

	/** @var \Psr\Log\LoggerInterface $logger */
	protected $logger;

    /** @var QBankCachePolicy */
    protected $cachePolicy;

	/** @var \Doctrine\Common\Cache\Cache */
	protected $cache;

	/** @var Request[] */
	protected $delayedRequests;

	public function __construct(Client $client, QBankCachePolicy $cachePolicy, Cache $cache = null) {
		$this->client = $client;
        $this->cachePolicy = $cachePolicy;
        $this->cache = $cache;
		$this->delayedRequests = array();
	}

	/**
	 * @param string $endpoint
	 * @param array $params
	 * @param string $method
	 * @param QBankCachePolicy $cachePolicy
	 * @param bool $delayed
	 * @throws QBankApiException
	 * @return mixed
	 */
	protected function call($endpoint, array $params = array(), $method = self::METHOD_GET, QBankCachePolicy $cachePolicy = null, $delayed = false) {
        $cachePolicy = ($cachePolicy !== null) ? $cachePolicy : $this->cachePolicy;
		try {
			switch ($method) {
				case self::METHOD_POST:
					$request = $this->client->post($endpoint, null, $params);
					break;
				case self::METHOD_PUT:
					$request = $this->client->put($endpoint, null, $params);
					break;
				case self::METHOD_GET:
				default:
                    if ($cachePolicy->isEnabled() && $this->cache->contains(md5($endpoint . json_encode($params)))) {
                        $this->logger->info(
                            'Using cached response. '.strtoupper($method).' '.$endpoint,
                            array(
                                'endpoint' => $endpoint,
                                'parameters' => $params,
                                'method' => $method
                            )
                        );
                        return $this->cache->fetch(md5($endpoint . json_encode($params)));
                    } else {
    					$request = $this->client->get($endpoint, null, array('query' => $params));
    				}
					break;
			}
			if ($delayed) {	// Place in a queue to be processed on destruct
				$this->delayedRequests[] = $request;
				$this->logger->debug(
					'Request to QBank added to delayed queue. ' . strtoupper($method) . ' ' . $endpoint,
					array(
						'endpoint' => $endpoint,
						'parameters' => $params,
						'method' => $method
					)
				);
				return [];
			}
			$response = $request->send();
			$this->logger->debug(
				'Request to QBank sent. '.strtoupper($method).' '.$endpoint,
				array(
					'endpoint' => $endpoint,
					'parameters' => $params,
					'method' => $method,
					'response' => ($response instanceof Response) ? substr($response->getBody(), 0, 4096) : ''
				)
			);
			if ($cachePolicy->isEnabled()) {
			    $this->cache->save(md5($endpoint . json_encode($params)), $response->json(), $cachePolicy->getLifetime());
			}
			return $response->json();
		} catch (RequestException $re) {
			$response = $re->getRequest()->getResponse();
			$this->logger->error(
				'Error while sending request to QBank. '.strtoupper($method).' '.$endpoint,
				array(
					'exception' => $re,
					'message' => $re->getMessage(),
					'endpoint' => $endpoint,
					'parameters' => $params,
					'method' => $method,
					'response' => ($response instanceof Response) ? substr($response->getBody(), 0, 4096) : ''
				)
			);
			throw new QBankApiException('Error while sending request to QBank: '.$re->getMessage(), $response instanceof Response ? $response->getStatusCode() : 0, $re);
		} catch (RuntimeException $re) {
			$this->logger->critical(
				'Error while decoding response from QBank.  '.strtoupper($method).' '.$endpoint,
				array(
					'exception' => $re,
					'message' => $re->getMessage(),
					'endpoint' => $endpoint,
					'parameters' => $params,
					'method' => $method,
					'response' => ($response instanceof Response) ? substr($response->getBody(), 0, 4096) : ''
				)
			);
			throw new QBankApiException('Error while decoding response from QBank: '.$re->getMessage(), $re->getCode(), $re);
		}
	}

	/**
	 * @param string $endpoint
	 * @param array $parameters
	 * @param QBankCachePolicy $cachePolicy
	 * @async bool $delayed
	 * @return mixed
	 */
	protected function get($endpoint, array $parameters = array(), QBankCachePolicy $cachePolicy = null, $delayed = false) {
		return $this->call($endpoint, $parameters, self::METHOD_GET, $cachePolicy, $delayed);
	}

	/**
	* @param string $endpoint
	* @param array $parameters
	* @param bool $delayed
	* @return mixed
	*/
	protected function post($endpoint, array $parameters = array(), $delayed = false)  {
		return $this->call($endpoint, $parameters, self::METHOD_POST, null, $delayed);
	}

	/**
	* @param string $endpoint
	* @param array $parameters
	* @param bool $delayed
	* @return mixed
	*/
	protected function put($endpoint, array $parameters = array(), $delayed = false) {
		return $this->call($endpoint, $parameters, self::METHOD_PUT, null, $delayed);
	}

	public function setLogger(LoggerInterface $logger) {
		$this->logger = $logger;
	}

	public function __destruct() {
		flush();
		if (is_array($this->delayedRequests)) {
			foreach ($this->delayedRequests as $request) {
				if ($request instanceof Request) {
					try {
						$path = str_replace(parse_url($this->client->getBaseUrl(), PHP_URL_PATH), '', $request->getPath());
						$circumstances = [
							'endpoint' => $path,
							'parameters' => ($request instanceof EntityEnclosingRequest) ? $request->getPostFields() : '',
							'method' => $request->getMethod()
						];
						$socket = fsockopen(parse_url($this->client->getBaseUrl(), PHP_URL_HOST), 80, $errno, $errstr);
						if ($socket === false) {
							throw new \Exception('Could not open socket for delayed request: '.$errstr, $errno);
						}
						stream_set_blocking($socket, 0);
						$listeners = $request->getEventDispatcher()->getListeners('request.before_send');
						$accessToken = null;
						foreach ($listeners as $listener) {
							if ($listener[0] instanceof Oauth2Plugin) {
								$accessToken = $listener[0]->getAccessToken();
								break;
							}
						}
						if (!$accessToken) {
							throw new \Exception('Could not get access token for delayed request');
						}
						$request->addHeader('Authorization', 'Bearer ' . $accessToken['access_token']);
						if ($request instanceof EntityEnclosingRequest) {
							$request->addHeader('Content-length', strlen($request->getPostFields()));
						}
						$bytesWritten = 0;
						$bytesTotal = strlen($request->__toString());
						$closed = false;
						while (!$closed && $bytesWritten < $bytesTotal) {
							$written = @fwrite($socket, substr($request->__toString(), $bytesWritten));
							if ($written == false) {
								fclose($socket);
								throw new \Exception(
									'Error while writing to socket for delayed request: '.socket_strerror(socket_last_error($socket)),
									socket_last_error($socket)
								);
							}
							$bytesWritten += $written;
						}
						fclose($socket);
						$this->logger->debug('Delayed request to QBank sent. ' . strtoupper($request->getMethod()) . ' ' . $path, $circumstances);
					} catch (\Exception $e) {
						$this->logger->warning('Error while sending delayed request to QBank: ' . $e->getMessage(), isset($circumstances) ? $circumstances : []);
					}
				}
			}
		}
	}
}