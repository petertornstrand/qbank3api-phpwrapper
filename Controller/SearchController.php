<?php

namespace QBNK\QBank\API\Controller;

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
	 * 
	 * @return SearchResult
	 */
	public function search($search) {
		$query = array();
		$query = array_merge($query, $search->jsonSerialize());
		return new SearchResult($this->post('v1/search', $query));
	}

}