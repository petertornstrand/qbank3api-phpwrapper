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
	 * ID of the Filter (only applicable if Category or Folder FilterItem)
	 * @var integer
	 */
	protected $id;

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
	 * - <b>id</b> - ID of the Filter (only applicable if Category or Folder FilterItem)
	 * - <b>title</b> - Title
	 * - <b>mediaIds</b> - An array of mediaIds that are tagged with this title
	 * 
	 */
	public function __construct($parameters) {
		
		
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['title'])) {
			$this->setTitle($parameters['title']);
		}
	
		if (isset($parameters['mediaIds'])) {
			$this->setMediaIds($parameters['mediaIds']);
		}
	
	}


	/**
	 * Gets the id of the FilterItem
	 * @return integer
	 */
	public function getId() {
		return $this->id;
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
	 * Sets the "id" of the FilterItem
	 * @param integer $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = (int)$id;
		return $this;
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
		
		if ($this->id !== null) {
			$array['id'] = $this->id;
		}
		if ($this->title !== null) {
			$array['title'] = $this->title;
		}
		if ($this->mediaIds !== null) {
			$array['mediaIds'] = $this->mediaIds;
		}
		return $array;
	}
}