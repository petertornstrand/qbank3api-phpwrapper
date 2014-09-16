<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class FolderParent implements \JsonSerializable {

	/**
	 * The Folder identifier.
	 * @var int
	 */
	protected $folderid;

	/**
	 * The distance from the specified Folder identifer, ie. the reverse depth.
	 * @var int
	 */
	protected $depth;


	/**
	 * Constructs a {@link FolderParent }.
	 * @param array $parameters An array of parameters to initialize the {@link FolderParent } with.
	 * - <b>folderid</b> - The Folder identifier.
	 * - <b>depth</b> - The distance from the specified Folder identifer, ie. the reverse depth.
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['folderid'])) {
			$this->setFolderid($parameters['folderid']);
		}
	
		if (isset($parameters['depth'])) {
			$this->setDepth($parameters['depth']);
		}
	
	}


	/**
	 * Gets the folderid of the FolderParent
	 * @return int
	 */
	public function getFolderid() {
		return $this->folderid;
	}

	/**
	 * Gets the depth of the FolderParent
	 * @return int
	 */
	public function getDepth() {
		return $this->depth;
	}



	/**
	 * Sets the "folderid" of the FolderParent
	 * @param int $folderid
	 * @return $this
	 */
	protected function setFolderid($folderid) {
		$this->folderid = $folderid;
		return $this;
	}

	/**
	 * Sets the "depth" of the FolderParent
	 * @param int $depth
	 * @return $this
	 */
	protected function setDepth($depth) {
		$this->depth = $depth;
		return $this;
	}

	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->folderid !== null) {
			$array['folderid'] = $this->folderid;
		}
		if ($this->depth !== null) {
			$array['depth'] = $this->depth;
		}
		return $array;
	}
}