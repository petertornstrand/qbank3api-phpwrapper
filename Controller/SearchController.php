<?php

namespace QBNK\QBank\API\Controller;

	use QBNK\QBank\API\Model\SearchResult;
	use QBNK\QBank\API\Model\QBNK\QBank\Api\v1\Model\Search;
	use QBNK\QBank\API\CachePolicy;
	use QBNK\QBank\API\Model\Search;


class SearchController extends ControllerAbstract {

	/**
	 * Search for Media [DEPRECATED]
	 *
     * Search for Media in QBank through the GET method. This method is deprecated and exists only to solve a couple of rare IE8 & IE9 cases. It is strongly recommended to use the POST approach instead, as request bodies may become to large for the GET query.
	 * 
	 * @param QBNK\QBank\Api\v1\Model\Search $search Search parameters.
	 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 * @return SearchResult
	 */
	public function retrievesearch(QBNK\QBank\Api\v1\Model\Search $search, CachePolicy $cachePolicy = null) {
		$parameters = [
			'query' => ['search' => json_decode(json_encode($search), true), ],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/search', $parameters, $cachePolicy);
		$result = new SearchResult($result);
				
		return $result;
	}

	/**
	 * 
	 * 
	 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 *
	 */
	public function metadata(CachePolicy $cachePolicy = null) {
		$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/search/metadata', $parameters, $cachePolicy);
						
		return $result;
	}

	/**
	 * Search for Media in QBank
	 * 
	 * @param Search $search Search parameters
	 * @return SearchResult
	 */
	public function search(Search $search, CachePolicy $cachePolicy = null) {
		$parameters = [
			'query' => [],
			'body' => json_encode(['search' => $search, ]),
			'headers' => []
		];
		$result = $this->call('v1/search', $parameters, self::METHOD_POST, $cachePolicy);
		$result = new SearchResult($result);
				
		return $result;
	}
	}