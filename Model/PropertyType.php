<?php

namespace QBNK\QBank\API\Model;

use \DateTime;
use \Exception;


/**
 * A description of the PropertyType.
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class PropertyType implements \JsonSerializable  {



	/**
	 * When the Property was created.
	 * @var DateTime
	 */
	protected $created;

	/**
	 * The identifier of the User who created the Property.
	 * @var int
	 */
	protected $createdBy;

	/**
	 * When the Property was updated.
	 * @var DateTime
	 */
	protected $updated;

	/**
	 * Which user who updated the Property.
	 * @var int
	 */
	protected $updatedBy;

	/**
	 * Whether the Property is deleted.
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * The Property name.
	 * @var string
	 */
	protected $name;

	/**
	 * The Property system name, this is used for programmatic access.
	 * @var string
	 */
	protected $systemName;

	/**
	 * A description of the PropertyType.
	 * @var string
	 */
	protected $description;

	/**
	 * Data type for the Property (1: Boolean, 2: DateTime, 3: Decimal, 4: Float, 5: Integer, 6: String) In addition, definition can alter the way a Property should be displayed.
	 * @var int
	 */
	protected $dataTypeId;

	/**
	 * A Key/Value Object containing extra information about how this Property should be used.
	 * @var Object
	 */
	protected $definition;


	/**
	 * Constructs a {@link PropertyType }.
	 * @param array $parameters An array of parameters to initialize the {@link PropertyType } with.
	 * - <b>created</b> - When the Property was created.
	 * - <b>createdBy</b> - The identifier of the User who created the Property.
	 * - <b>updated</b> - When the Property was updated.
	 * - <b>updatedBy</b> - Which user who updated the Property.
	 * - <b>deleted</b> - Whether the Property is deleted.
	 * - <b>name</b> - The Property name.
	 * - <b>systemName</b> - The Property system name, this is used for programmatic access.
	 * - <b>description</b> - A description of the PropertyType.
	 * - <b>dataTypeId</b> - Data type for the Property (1: Boolean, 2: DateTime, 3: Decimal, 4: Float, 5: Integer, 6: String) In addition, definition can alter the way a Property should be displayed.
	 * - <b>definition</b> - A Key/Value Object containing extra information about how this Property should be used.
	 * 
	 */
	public function __construct($parameters) {
		
		
		if (isset($parameters['created'])) {
			$this->setCreated($parameters['created']);
		}
	
		if (isset($parameters['createdBy'])) {
			$this->setCreatedBy($parameters['createdBy']);
		}
	
		if (isset($parameters['updated'])) {
			$this->setUpdated($parameters['updated']);
		}
	
		if (isset($parameters['updatedBy'])) {
			$this->setUpdatedBy($parameters['updatedBy']);
		}
	
		if (isset($parameters['deleted'])) {
			$this->setDeleted($parameters['deleted']);
		}
	
		if (isset($parameters['name'])) {
			$this->setName($parameters['name']);
		}
	
		if (isset($parameters['systemName'])) {
			$this->setSystemName($parameters['systemName']);
		}
	
		if (isset($parameters['description'])) {
			$this->setDescription($parameters['description']);
		}
	
		if (isset($parameters['dataTypeId'])) {
			$this->setDataTypeId($parameters['dataTypeId']);
		}
	
		if (isset($parameters['definition'])) {
			$this->setDefinition($parameters['definition']);
		}
	
	}


	/**
	 * Gets the created of the PropertyType
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the PropertyType
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the PropertyType
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the PropertyType
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the deleted of the PropertyType
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets the name of the PropertyType
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the systemName of the PropertyType
	 * @return string
	 */
	public function getSystemName() {
		return $this->systemName;
	}

	/**
	 * Gets the description of the PropertyType
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Gets the dataTypeId of the PropertyType
	 * @return int
	 */
	public function getDataTypeId() {
		return $this->dataTypeId;
	}

	/**
	 * Gets the definition of the PropertyType
	 * @return Object
	 */
	public function getDefinition() {
		return $this->definition;
	}



	/**
	 * Sets the "created" of the PropertyType
	 * @param DateTime $created
	 * @return $this
	 */
	public function setCreated($created) {
		if ($created instanceOf DateTime) {
			$this->created = $created;
		} else {
			try {
				$this->created = new DateTime($created);
			} catch (Exception $e) {
				$this->created = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "createdBy" of the PropertyType
	 * @param int $createdBy
	 * @return $this
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the PropertyType
	 * @param DateTime $updated
	 * @return $this
	 */
	public function setUpdated($updated) {
		if ($updated instanceOf DateTime) {
			$this->updated = $updated;
		} else {
			try {
				$this->updated = new DateTime($updated);
			} catch (Exception $e) {
				$this->updated = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "updatedBy" of the PropertyType
	 * @param int $updatedBy
	 * @return $this
	 */
	public function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "deleted" of the PropertyType
	 * @param boolean $deleted
	 * @return $this
	 */
	public function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "name" of the PropertyType
	 * @param string $name
	 * @return $this
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "systemName" of the PropertyType
	 * @param string $systemName
	 * @return $this
	 */
	public function setSystemName($systemName) {
		$this->systemName = $systemName;
		return $this;
	}

	/**
	 * Sets the "description" of the PropertyType
	 * @param string $description
	 * @return $this
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Sets the "dataTypeId" of the PropertyType
	 * @param int $dataTypeId
	 * @return $this
	 */
	public function setDataTypeId($dataTypeId) {
		$this->dataTypeId = $dataTypeId;
		return $this;
	}

	/**
	 * Sets the "definition" of the PropertyType
	 * @param Object $definition
	 * @return $this
	 */
	public function setDefinition($definition) {
		$this->definition = $definition;
		return $this;
	}


	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->created !== null) {
			$array['created'] = $this->created;
		}
		if ($this->createdBy !== null) {
			$array['createdBy'] = $this->createdBy;
		}
		if ($this->updated !== null) {
			$array['updated'] = $this->updated;
		}
		if ($this->updatedBy !== null) {
			$array['updatedBy'] = $this->updatedBy;
		}
		if ($this->deleted !== null) {
			$array['deleted'] = $this->deleted;
		}
		if ($this->name !== null) {
			$array['name'] = $this->name;
		}
		if ($this->systemName !== null) {
			$array['systemName'] = $this->systemName;
		}
		if ($this->description !== null) {
			$array['description'] = $this->description;
		}
		if ($this->dataTypeId !== null) {
			$array['dataTypeId'] = $this->dataTypeId;
		}
		if ($this->definition !== null) {
			$array['definition'] = $this->definition;
		}
		return $array;
	}
}