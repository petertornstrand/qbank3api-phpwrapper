<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Response implements \JsonSerializable  {



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


	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->version !== null) {
			$array['version'] = $this->version;
		}
		return $array;
	}
}