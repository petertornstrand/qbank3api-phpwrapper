<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class SearchSort implements \JsonSerializable  {



	/**
	 * Any of the SORT_* constants
	 * @var string
	 */
	protected $sortField;

	/**
	 * SORT_DIRECTION_ASCENDING or SORT_DIRECTION_DESCENDING (default)
	 * @var string
	 */
	protected $sortDirection;


	/**
	 * Constructs a {@link SearchSort }.
	 * @param array $parameters An array of parameters to initialize the {@link SearchSort } with.
	 * - <b>sortField</b> - Any of the SORT_* constants
	 * - <b>sortDirection</b> - SORT_DIRECTION_ASCENDING or SORT_DIRECTION_DESCENDING (default)
	 * 
	 */
	public function __construct($parameters) {
		
		
		
		if (isset($parameters['sortField'])) {
			$this->setSortField($parameters['sortField']);
		}
	
		if (isset($parameters['sortDirection'])) {
			$this->setSortDirection($parameters['sortDirection']);
		}
	
	}


	/**
	 * Gets the sortField of the SearchSort
	 * @return string
	 */
	public function getSortField() {
		return $this->sortField;
	}

	/**
	 * Gets the sortDirection of the SearchSort
	 * @return string
	 */
	public function getSortDirection() {
		return $this->sortDirection;
	}



	/**
	 * Sets the "sortField" of the SearchSort
	 * @param string $sortField
	 * @return $this
	 */
	public function setSortField($sortField) {
		$this->sortField = $sortField;
		return $this;
	}

	/**
	 * Sets the "sortDirection" of the SearchSort
	 * @param string $sortDirection
	 * @return $this
	 */
	public function setSortDirection($sortDirection) {
		$this->sortDirection = $sortDirection;
		return $this;
	}


	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->sortField !== null) {
			$array['sortField'] = $this->sortField;
		}
		if ($this->sortDirection !== null) {
			$array['sortDirection'] = $this->sortDirection;
		}
		return $array;
	}
}