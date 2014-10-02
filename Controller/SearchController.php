<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\QBankCachePolicy;
use QBNK\QBank\API\Model\Search;
use QBNK\QBank\API\Model\SearchResult;


/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class SearchController extends ControllerAbstract {
	
	/**
	 * Search for Media in QBank
	 * @param Search $search Search parameters
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return SearchResult
	 */
	public function search($search, QBankCachePolicy $cachePolicy = null) {
		$cachePolicy = ($cachePolicy !== null) ? $cachePolicy : $this->cachePolicy;
		if ($cachePolicy->isEnabled() && $this->cache->contains(md5('search-'.json_encode($search)))) {
			$this->logger->info(
				'Using cached search response. POST /search',
				array(
					'endpoint' => '/search',
					'parameters' => json_encode($search),
					'method' => 'POST'
				)
			);
			return new SearchResult($this->cache->fetch(md5('search-'.json_encode($search))));
		}
		$query = array();
		$query = array_merge($query, json_decode(json_encode($search), true));
		$response = $this->post('v1/search', $query);
		if ($cachePolicy->isEnabled()) {
			$this->cache->save(md5('search-'.json_encode($search)), $response, $cachePolicy->getLifetime());
		}
		return new SearchResult($response);
	}

}