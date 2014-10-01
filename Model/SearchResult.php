<?php

namespace QBNK\QBank\API\Model;

use \Exception;


/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class SearchResult implements \JsonSerializable , \Iterator, \ArrayAccess, \Countable {

	/** @var int */
	protected $iteratorPosition = 0;


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
	 * @var Media[]
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
	 * @return Media[]
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
	 * @param Media[] $results
	 * @return $this
	 */
	protected function setResults($results) {
		if (is_array($results)) {
			$this->results = array();
			foreach ($results as $item) {
				if (!($item instanceof Media)) {
					if (is_array($item)) {
						try {
							$item = new Media($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate Media. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "Media"!', E_USER_WARNING);
						continue;
					}
				}
				$this->results[] = $item;
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
	 * Gets the current element.
	 * @return mixed
	 */
	public function current() {
		return $this->results[$this->iteratorPosition];
	}

	/**
	 * Gets the key of the current element.
	 */
	public function key() {
		return $this->iteratorPosition;
	}

	/**
	 * Moves the internal pointer to the next element.
	 * @return void
	 */
	public function next() {
		$this->iteratorPosition++;
	}

	/**
	 * Resets the internal pointer.
	 * @return void
	 */
	public function rewind() {
		$this->iteratorPosition = 0;
	}

	/**
	 * Checks if the current internal pointer position is valid.
	 * @return bool
	 */
	public function valid() {
		return isset($this->results[$this->iteratorPosition]);
	}

	/**
	 * Whether an offset exists.
	 * @param int $offset
	 * @return bool
	 */
	public function offsetExists($offset) {
		return isset($this->results[$offset]);
	}

	/**
	 * Gets the element at the specified offset.
	 * @param int $offset
	 * @return mixed
	 */
	public function offsetGet($offset) {
		return $this->offsetExists($offset) ? $this->results[$offset] : null;
	}

	/**
	 * Assigns an element to the specified offset.
	 * @param int|null $offset
	 * @param mixed $value
	 * @return void
	 */
	public function offsetSet($offset, $value) {
		if ($offset === null) {
			$this->results[] = $value;
		} else {
			$this->results[$offset] = $value;
		}
	}

	/**
	 * Unsets an element at the specified offset.
	 * @param int $offset
	 * @return void
	 */
	public function offsetUnset($offset) {
		unset($this->results[$offset]);
	}

	/**
	 * Counts the number of search results
	 * @return int
	 */
	public function count() {
		return count($this->results);
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