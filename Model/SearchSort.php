<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class SearchSort implements \JsonSerializable  {

	const SORT_ID = 'id';
	const SORT_NAME = 'name';
	const SORT_CREATED = 'created';
	const SORT_UPDATED = 'updated';
	const SORT_RELEVANCE = 'relevance';
	const SORT_CATEGORY = 'category';
	const SORT_SIZE = 'size';
	const SORT_MIMETYPE = 'mimetype';
	const SORT_POPULARITY = 'popularity';
	const SORT_PROPERTY = 'property';

	const SORT_DIRECTION_ASCENDING = 'asc';
	const SORT_DIRECTION_DESCENDING = 'desc';

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
	 * When sorting on Media Popularity, the source to check (QBank Backend, frontend, etc)
	 * @var int $sourceId
	 */
	protected $sourceId;

	/**
	 * When sorting on Media Popularity, a optional dateRange to find popular media within
	 * @var DateTimeRange $dateRange
	 */
	protected $dateRange;

	/**
	 * When sorting on a property, the system name of the property to sort on
	 * @var string $systemName
	 */
	protected $systemName;

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
		} else {
			$this->sortDirection = self::SORT_DIRECTION_DESCENDING;
		}

		if (isset($parameters['sourceId'])) {
			$this->setSourceId($parameters['sourceId']);
		}

		if (isset($parameters['dateRange'])) {
			$this->setDateRange($parameters['dateRange']);
		}

		if (isset($parameters['systemName'])) {
			$this->setSystemName($parameters['systemName']);
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

	public function getSourceId() {
		return $this->sourceId;
	}

	public function getDateRange() {
		return $this->dateRange;
	}

	public function getSystemName() {
		return $this->systemName;
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

	public function setSourceId($sourceId) {
		$this->sourceId = (int)$sourceId;
		return $this;
	}

	public function setDateRange($dateRange) {
		if ($dateRange instanceof DateTimeRange) {
			$this->dateRange = $dateRange;
		} else if (is_array($dateRange)) {
			$this->dateRange = new DateTimeRange($dateRange);
		} else {
			$this->dateRange = null;
			trigger_error('Argument must be an object of class DateTimeRange. Data loss!', E_USER_WARNING);
		}
		return $this;
	}

	public function setSystemName($systemName) {
		$this->systemName = $systemName;
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
		if ($this->sourceId !== null) {
			$array['sourceId'] = $this->sourceId;
		}
		if ($this->dateRange !== null) {
			$array['dateRange'] = $this->dateRange;
		}
		if ($this->systemName !== null) {
			$array['systemName'] = $this->systemName;
		}
		return $array;
	}
}