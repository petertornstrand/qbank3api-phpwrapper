<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class FilterItem implements \JsonSerializable  {



	/**
	 * Title
	 * @var string
	 */
	protected $title;

	/**
	 * An array of mediaIds that are tagged with this title
	 * @var string[]
	 */
	protected $mediaIds;


	/**
	 * Constructs a {@link FilterItem }.
	 * @param array $parameters An array of parameters to initialize the {@link FilterItem } with.
	 * - <b>title</b> - Title
	 * - <b>mediaIds</b> - An array of mediaIds that are tagged with this title
	 * 
	 */
	public function __construct($parameters) {
		
		
		
		if (isset($parameters['title'])) {
			$this->setTitle($parameters['title']);
		}
	
		if (isset($parameters['mediaIds'])) {
			$this->setMediaIds($parameters['mediaIds']);
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
	 * Gets the mediaIds of the FilterItem
	 * @return string[]
	 */
	public function getMediaIds() {
		return $this->mediaIds;
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
	 * Sets the "mediaIds" of the FilterItem
	 * @param string[] $mediaIds
	 * @return $this
	 */
	protected function setMediaIds($mediaIds) {
		if (is_array($mediaIds)) {
			$this->mediaIds = array();
			foreach ($mediaIds as $item) {
				$this->mediaIds[] = (string) $item;
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
		if ($this->mediaIds !== null) {
			$array['mediaIds'] = $this->mediaIds;
		}
		return $array;
	}
}