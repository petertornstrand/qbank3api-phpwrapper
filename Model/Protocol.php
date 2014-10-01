<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Protocol implements \JsonSerializable  {



	/**
	 * The Protocol identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * The human readable description of the Protocol.
	 * @var string
	 */
	protected $description;

	/**
	 * The Protocol name.
	 * @var string
	 */
	protected $name;

	/**
	 * The Protocol definition. Describes the needed values and other parameters.
	 * @var Object
	 */
	protected $definition;


	/**
	 * Constructs a {@link Protocol }.
	 * @param array $parameters An array of parameters to initialize the {@link Protocol } with.
	 * - <b>id</b> - The Protocol identifier.
	 * - <b>description</b> - The human readable description of the Protocol.
	 * - <b>name</b> - The Protocol name.
	 * - <b>definition</b> - The Protocol definition. Describes the needed values and other parameters.
	 * 
	 */
	public function __construct($parameters) {
		
		
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['description'])) {
			$this->setDescription($parameters['description']);
		}
	
		if (isset($parameters['name'])) {
			$this->setName($parameters['name']);
		}
	
		if (isset($parameters['definition'])) {
			$this->setDefinition($parameters['definition']);
		}
	
	}


	/**
	 * Gets the id of the Protocol
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the description of the Protocol
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Gets the name of the Protocol
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the definition of the Protocol
	 * @return Object
	 */
	public function getDefinition() {
		return $this->definition;
	}



	/**
	 * Sets the "id" of the Protocol
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "description" of the Protocol
	 * @param string $description
	 * @return $this
	 */
	protected function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Sets the "name" of the Protocol
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "definition" of the Protocol
	 * @param Object $definition
	 * @return $this
	 */
	protected function setDefinition($definition) {
		$this->definition = $definition;
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
		if ($this->description !== null) {
			$array['description'] = $this->description;
		}
		if ($this->name !== null) {
			$array['name'] = $this->name;
		}
		if ($this->definition !== null) {
			$array['definition'] = $this->definition;
		}
		return $array;
	}
}