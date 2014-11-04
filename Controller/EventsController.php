<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\QBankCachePolicy;
use QBNK\QBank\API\Model\DownloadItem;
use QBNK\QBank\API\Model\Search;


/**
 * Class Events
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class EventsController extends ControllerAbstract {
	
	/**
	 * Track a Media download
	 * @param int $sessionId The session id to log the download on
	 * @param DownloadItem[] $downloads An array of DownloadItem (media & template) that was downloaded
	 * 
	 * @return void
	 */
	public function download($sessionId, $downloads) {
		$query = array();
		$query['sessionId'] = $sessionId;
		$query['downloads'] = json_decode(json_encode($downloads), true);
		$this->post('v1/events/download', $query, true);
	}

	/**
	 * Track a Search
	 * @param int $sessionId The session id to log the search on
	 * @param Search $search The Search that was made
	 * @param int $hits Number of hits for this search
	 * 
	 * @return void
	 */
	public function search($sessionId, $search, $hits) {
		$query = array();
		$query['sessionId'] = $sessionId;
		$query['search'] = json_decode(json_encode($search), true);
		$query['hits'] = $hits;
		$this->post('v1/events/search', $query, true);
	}

	/**
	 * SessionId must be sent along with all subsequent requests to track events.
	 * @param int $sourceId the source we should log things on
	 * @param string $sessionHash Some sort of identifier for the user
	 * @param string $remoteIp Ip-address of the user
	 * @param string $userAgent the User Agent of the user
	 * 
	 * @return int
	 */
	public function session($sourceId, $sessionHash, $remoteIp, $userAgent) {
		$query = array();
		$query['sourceId'] = $sourceId;
		$query['sessionHash'] = $sessionHash;
		$query['remoteIp'] = $remoteIp;
		$query['userAgent'] = $userAgent;
		return (int)$this->post('v1/events/session', $query);
	}

	/**
	 * Track a Media view
	 * @param int $sessionId The session id to log the search on
	 * @param int $mediaId The ID of the media that was viewed
	 * 
	 * @return void
	 */
	public function view($sessionId, $mediaId) {
		$query = array();
		$query['sessionId'] = $sessionId;
		$query['mediaId'] = $mediaId;
		$this->post('v1/events/view', $query, true);
	}

}