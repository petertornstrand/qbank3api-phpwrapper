<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Response {

	/**
	 * 
	 * @var int
	 */
	protected $version;


	/**
	 * Constructs a {@link Response }.
	 * @param array $parameters An array of parameters to initialize the {@link Response } with.
	 * - <b>version</b> - 
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['version'])) {
			$this->setVersion($parameters['version']);
		}
	
	}


	/**
	 * Gets the version of the Response
	 * @return int
	 */
	public function getVersion() {
		return $this->version;
	}



	/**
	 * Sets the "version" of the Response
	 * @param int $version
	 * @return $this
	 */
	protected function setVersion($version) {
		$this->version = $version;
		return $this;
	}
}