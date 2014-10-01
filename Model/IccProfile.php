<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class IccProfile implements \JsonSerializable  {



	/**
	 * The IccProfile identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * The IccProfile name.
	 * @var string
	 */
	protected $name;

	/**
	 * The IccProfile human readable description.
	 * @var string
	 */
	protected $description;


	/**
	 * Constructs a {@link IccProfile }.
	 * @param array $parameters An array of parameters to initialize the {@link IccProfile } with.
	 * - <b>id</b> - The IccProfile identifier.
	 * - <b>name</b> - The IccProfile name.
	 * - <b>description</b> - The IccProfile human readable description.
	 * 
	 */
	public function __construct($parameters) {
		
		
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['name'])) {
			$this->setName($parameters['name']);
		}
	
		if (isset($parameters['description'])) {
			$this->setDescription($parameters['description']);
		}
	
	}


	/**
	 * Gets the id of the IccProfile
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the name of the IccProfile
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the description of the IccProfile
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}



	/**
	 * Sets the "id" of the IccProfile
	 * @param int $id
	 * @return $this
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "name" of the IccProfile
	 * @param string $name
	 * @return $this
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "description" of the IccProfile
	 * @param string $description
	 * @return $this
	 */
	public function setDescription($description) {
		$this->description = $description;
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
		if ($this->name !== null) {
			$array['name'] = $this->name;
		}
		if ($this->description !== null) {
			$array['description'] = $this->description;
		}
		return $array;
	}
}