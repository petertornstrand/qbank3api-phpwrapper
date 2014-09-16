<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class SearchResult implements \JsonSerializable {

	/**
	 * Number of hits per page in the SearchResult
	 * @var int
	 */
	protected $limit;

	/**
	 * Starting position of SearchResult
	 * @var int
	 */
	protected $offset;

	/**
	 * An array of Media matching the search
	 * @var Array
	 */
	protected $results;

	/**
	 * Time spent searching
	 * @var float
	 */
	protected $timeSearching;

	/**
	 * Total number of hits
	 * @var int
	 */
	protected $totalHits;


	/**
	 * Constructs a {@link SearchResult }.
	 * @param array $parameters An array of parameters to initialize the {@link SearchResult } with.
	 * - <b>limit</b> - Number of hits per page in the SearchResult
	 * - <b>offset</b> - Starting position of SearchResult
	 * - <b>results</b> - An array of Media matching the search
	 * - <b>timeSearching</b> - Time spent searching
	 * - <b>totalHits</b> - Total number of hits
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['limit'])) {
			$this->setLimit($parameters['limit']);
		}
	
		if (isset($parameters['offset'])) {
			$this->setOffset($parameters['offset']);
		}
	
		if (isset($parameters['results'])) {
			$this->setResults($parameters['results']);
		}
	
		if (isset($parameters['timeSearching'])) {
			$this->setTimeSearching($parameters['timeSearching']);
		}
	
		if (isset($parameters['totalHits'])) {
			$this->setTotalHits($parameters['totalHits']);
		}
	
	}


	/**
	 * Gets the limit of the SearchResult
	 * @return int
	 */
	public function getLimit() {
		return $this->limit;
	}

	/**
	 * Gets the offset of the SearchResult
	 * @return int
	 */
	public function getOffset() {
		return $this->offset;
	}

	/**
	 * Gets the results of the SearchResult
	 * @return Array
	 */
	public function getResults() {
		return $this->results;
	}

	/**
	 * Gets the timeSearching of the SearchResult
	 * @return float
	 */
	public function getTimeSearching() {
		return $this->timeSearching;
	}

	/**
	 * Gets the totalHits of the SearchResult
	 * @return int
	 */
	public function getTotalHits() {
		return $this->totalHits;
	}



	/**
	 * Sets the "limit" of the SearchResult
	 * @param int $limit
	 * @return $this
	 */
	protected function setLimit($limit) {
		$this->limit = $limit;
		return $this;
	}

	/**
	 * Sets the "offset" of the SearchResult
	 * @param int $offset
	 * @return $this
	 */
	protected function setOffset($offset) {
		$this->offset = $offset;
		return $this;
	}

	/**
	 * Sets the "results" of the SearchResult
	 * @param Array $results
	 * @return $this
	 */
	protected function setResults($results) {
		if (is_array($results)) {
			$this->results = array();
			foreach ($results as $item) {
				$this->results[] = new Media($item);
			}
		}
		return $this;
	}

	/**
	 * Sets the "timeSearching" of the SearchResult
	 * @param float $timeSearching
	 * @return $this
	 */
	protected function setTimeSearching($timeSearching) {
		$this->timeSearching = $timeSearching;
		return $this;
	}

	/**
	 * Sets the "totalHits" of the SearchResult
	 * @param int $totalHits
	 * @return $this
	 */
	protected function setTotalHits($totalHits) {
		$this->totalHits = $totalHits;
		return $this;
	}

	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->limit !== null) {
			$array['limit'] = $this->limit;
		}
		if ($this->offset !== null) {
			$array['offset'] = $this->offset;
		}
		if ($this->results !== null) {
			$array['results'] = $this->results;
		}
		if ($this->timeSearching !== null) {
			$array['timeSearching'] = $this->timeSearching;
		}
		if ($this->totalHits !== null) {
			$array['totalHits'] = $this->totalHits;
		}
		return $array;
	}
}