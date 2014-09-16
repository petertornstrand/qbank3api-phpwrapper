<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class FilterItem implements \JsonSerializable {

	/**
	 * Title
	 * @var string
	 */
	protected $title;

	/**
	 * An array of objectIds that are tagged with this title
	 * @var Array
	 */
	protected $objectIds;


	/**
	 * Constructs a {@link FilterItem }.
	 * @param array $parameters An array of parameters to initialize the {@link FilterItem } with.
	 * - <b>title</b> - Title
	 * - <b>objectIds</b> - An array of objectIds that are tagged with this title
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['title'])) {
			$this->setTitle($parameters['title']);
		}
	
		if (isset($parameters['objectIds'])) {
			$this->setObjectIds($parameters['objectIds']);
		}
	
	}


	/**
	 * Gets the title of the FilterItem
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Gets the objectIds of the FilterItem
	 * @return Array
	 */
	public function getObjectIds() {
		return $this->objectIds;
	}



	/**
	 * Sets the "title" of the FilterItem
	 * @param string $title
	 * @return $this
	 */
	protected function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * Sets the "objectIds" of the FilterItem
	 * @param Array $objectIds
	 * @return $this
	 */
	protected function setObjectIds($objectIds) {
		if (is_array($objectIds)) {
			$this->objectIds = array();
			foreach ($objectIds as $item) {
				$this->objectIds[] = (string) $item;
			}
		}
		return $this;
	}

	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->title !== null) {
			$array['title'] = $this->title;
		}
		if ($this->objectIds !== null) {
			$array['objectIds'] = $this->objectIds;
		}
		return $array;
	}
}