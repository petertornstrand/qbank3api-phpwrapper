<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\SearchResult;


/**
 * Use PHPDoc comment to describe here
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class SearchController extends ControllerAbstract {
	
	/**
	 * Search for Media in QBank
	 * @param Object $rEQUEST_BODY Paste JSON data here
	 * 
	 * @return SearchResult
	 */
	public function search($rEQUEST_BODY) {
		return new SearchResult($this->post('v1/search'));
	}

}