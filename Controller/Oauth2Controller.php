<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\Object;
use QBNK\QBank\API\Model\Response;


/**
 * Server API
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Oauth2Controller extends ControllerAbstract {
	
	/**
	 * 
	 * 
	 * @return array
	 */
	public function authorize() {
		$items = array();
		foreach ($this->get('v1/oauth2/authorize') as $item ) {
			$items[] = $item;
		}

		return $items;
	}

	/**
	 * 
	 * @param Object $rEQUEST_BODY Paste JSON data here with the following property.<hr/>authorize : <tag>boolean</tag>  - 
	 * 
	 * @return Response
	 */
	public function createAuthorize($rEQUEST_BODY = {

}) {
		$query = array();
		$query = array_merge($query, $rEQUEST_BODY->jsonSerialize());
		return new Response($this->post('v1/oauth2/authorize', $query));
	}

	/**
	 * 
	 * 
	 * @return array
	 */
	public function token() {
		$items = array();
		foreach ($this->post('v1/oauth2/token') as $item ) {
			$items[] = $item;
		}

		return $items;
	}

}