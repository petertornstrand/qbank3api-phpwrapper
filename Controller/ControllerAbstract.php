<?php
namespace QBNK\QBank\API\Controller;

use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Http\Client;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Exception\RequestException;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use QBNK\QBank\API\QBankApiException;

abstract class ControllerAbstract implements LoggerAwareInterface {
	const METHOD_GET = 'get';
	const METHOD_POST = 'post';
	const METHOD_PUT = 'put';

	/** @var \Guzzle\Http\Client $client */
	protected $client;

	/** @var \Psr\Log\LoggerInterface $logger */
	protected $logger;

	public function __construct(Client $client) {
		$this->client = $client;
	}

	/**
	 * @param string $endpoint
	 * @param array $params
	 * @param string $method
	 * @return mixed
	 */
	protected function call($endpoint, array $params = array(), $method = self::METHOD_GET) {
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
					$request = $this->client->get($endpoint, null, array('query' => $params));
					break;
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
			throw new QBankApiException('Error while sending request to QBank: '.$re->getMessage(), $response->getStatusCode(), $re);
		} catch (RuntimeException $re) {
			$response = $re->getRequest()->getResponse();
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
	 * @return mixed
	 */
	protected function get($endpoint, array $parameters = array()) {
		return $this->call($endpoint, $parameters, self::METHOD_GET);
	}

	/**
	* @param string $endpoint
	* @param array $parameters
	* @return mixed
	*/
	protected function post($endpoint, array $parameters = array())  {
		return $this->call($endpoint, $parameters, self::METHOD_POST);
	}

	/**
	* @param string $endpoint
	* @param array $parameters
	* @return mixed
	*/
	protected function put($endpoint, array $parameters = array()) {
		return $this->call($endpoint, $parameters, self::METHOD_PUT);
	}

	public function setLogger(LoggerInterface $logger) {
		$this->logger = $logger;
	}
}