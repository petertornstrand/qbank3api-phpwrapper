<?php

namespace QBNK\QBank\API;


use Doctrine\Common\Cache\Cache;
use Guzzle\Common\Event;
use Guzzle\Http\Message\Response;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Updates the access and refresh tokens if the response contained any.
 */
class Oauth2RefreshTokenCacheBusterPlugin implements EventSubscriberInterface {

	/** @var Cache $cache */
	protected $cache;

	/** @var LoggerInterface $logger */
	protected $logger;

	/**
	 * @param Cache $cache The cache to update
	 * @param LoggerInterface $logger Log instance
	 */
	public function __construct(Cache $cache, LoggerInterface $logger) {
		$this->cache = $cache;
		$this->logger = $logger;
	}

	/**
	* @inheritdoc
	*/
	public static function getSubscribedEvents() {
		return array(
			'request.success' => 'onRequestSuccess',
		);
	}

	/**
	* Event handler for token updates.
	* @param Event $event
	*/
	public function onRequestSuccess(Event $event) {
		if (isset($event['response']) && $event['response'] instanceof Response) {
			try {
				$response = $event['response']->json();
				if (isset($response['access_token']) && $this->cache->contains('access_token')) {
					$accessToken = ['access_token' => $response['access_token']];
					if (isset($response['expires_in'])) {
						$accessToken['expires'] = time() + $response['expires_in'];
					}
					$this->cache->save('access_token', $accessToken);
					$this->logger->info('Updated oauth2 access_token', $accessToken);
				}
				if (isset($response['refresh_token']) && $this->cache->contains('refresh_token')) {
					$this->cache->save('refresh_token', $response['refresh_token'], 3600 * 24 * 13);
					$this->logger->info('Updated oauth2 refresh_token', ['refresh_token' => $response['refresh_token']]);
				}
			} catch (\Exception $e) {
				$this->logger->warning('Exception while trying to check if the oauth2 cache should be updated: '.$e->getMessage());
			}
		}
	}
}