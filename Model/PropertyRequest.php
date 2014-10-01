<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class PropertyRequest extends PropertyCriteria implements \JsonSerializable  {



	/**
	 * Whether this property should be included in the SearchResult.
	 * @var boolean
	 */
	protected $forfetching;


	/**
	 * Constructs a {@link PropertyRequest }.
	 * @param array $parameters An array of parameters to initialize the {@link PropertyRequest } with.
	 * - <b>forfetching</b> - Whether this property should be included in the SearchResult.
	 * 
	 */
	public function __construct($parameters) {
		parent::__construct($parameters);
		
		
		if (isset($parameters['forfetching'])) {
			$this->setForfetching($parameters['forfetching']);
		}
	
	}


	/**
	 * Gets the forfetching of the PropertyRequest
	 * @return boolean
	 */
	public function getForfetching() {
		return $this->forfetching;
	}



	/**
	 * Sets the "forfetching" of the PropertyRequest
	 * @param boolean $forfetching
	 * @return $this
	 */
	public function setForfetching($forfetching) {
		$this->forfetching = (bool)$forfetching;
		return $this;
	}


	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->forfetching !== null) {
			$array['forfetching'] = $this->forfetching;
		}
		return $array;
	}
}