<?php

namespace QBNK\QBank\API\Model;

use \DateTime;
use \Exception;


/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Property implements \JsonSerializable  {



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
	 * Whether the Property has been modified since constructed.
	 * @var boolean
	 */
	protected $dirty;

	/**
	 * The PropertyType describing this Property.
	 * @var PropertyType
	 */
	protected $propertyType;

	/**
	 * The value of the Property.
	 * @var string
	 */
	protected $value;


	/**
	 * Constructs a {@link Property }.
	 * @param array $parameters An array of parameters to initialize the {@link Property } with.
	 * - <b>created</b> - When the Property was created.
	 * - <b>createdBy</b> - The identifier of the User who created the Property.
	 * - <b>updated</b> - When the Property was updated.
	 * - <b>updatedBy</b> - Which user who updated the Property.
	 * - <b>deleted</b> - Whether the Property is deleted.
	 * - <b>dirty</b> - Whether the Property has been modified since constructed.
	 * - <b>propertyType</b> - The PropertyType describing this Property.
	 * - <b>value</b> - The value of the Property.
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
	
		if (isset($parameters['dirty'])) {
			$this->setDirty($parameters['dirty']);
		}
	
		if (isset($parameters['propertyType'])) {
			$this->setPropertyType($parameters['propertyType']);
		}
	
		if (isset($parameters['value'])) {
			$this->setValue($parameters['value']);
		}
	
	}


	/**
	 * Gets the created of the Property
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the Property
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the Property
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the Property
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the deleted of the Property
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets the dirty of the Property
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the propertyType of the Property
	 * @return PropertyType
	 */
	public function getPropertyType() {
		return $this->propertyType;
	}

	/**
	 * Gets the value of the Property
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}



	/**
	 * Sets the "created" of the Property
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
	 * Sets the "createdBy" of the Property
	 * @param int $createdBy
	 * @return $this
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the Property
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
	 * Sets the "updatedBy" of the Property
	 * @param int $updatedBy
	 * @return $this
	 */
	public function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "deleted" of the Property
	 * @param boolean $deleted
	 * @return $this
	 */
	public function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "dirty" of the Property
	 * @param boolean $dirty
	 * @return $this
	 */
	public function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "propertyType" of the Property
	 * @param PropertyType $propertyType
	 * @return $this
	 */
	public function setPropertyType($propertyType) {
		if ($propertyType instanceof PropertyType) {
			$this->propertyType = $propertyType;
		} else if (is_array($propertyType)) {
			$this->propertyType = new PropertyType($propertyType);
		} else {
			$this->propertyType = null;
			trigger_error('Argument must be an object of class PropertyType. Data loss!', E_USER_WARNING);
		}
		return $this;
	}

	/**
	 * Sets the "value" of the Property
	 * @param string $value
	 * @return $this
	 */
	public function setValue($value) {
		$convertValue = function($value) {
			switch ($this->propertyType->getDataTypeId()) {
				case 1:		// bool.
					return (bool)$value;
					break;
				case 2:		// DateTime
					if ($value instanceof DateTime) {
						return $value;
					} else {
						try {
							return new DateTime($value);
						} catch (Exception $e) {
							return null;
						}
					}
					break;
				case 4:		// float
					return (float)$value;
					break;
				case 5:		// int
					return (int)$value;
					break;
				case 6:		// string
					return (string)$value;
					break;
				default:
					return $value;
					break;
			}
		};
		$definition = $this->propertyType->getDefinition();
		if (!empty($definition['array'])) {
			if (empty($definition['multiplechoice']) && isset($definition['options']) && is_array($definition['options'])) {
				$this->value = $convertValue(current($value)['value']);
			} else {
				$this->value = array();
				foreach ($value as $v) {
					$this->value[] = $convertValue($v['value']);
				}
			}
		} else {
			$this->value = $convertValue($value);
		}
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
		if ($this->dirty !== null) {
			$array['dirty'] = $this->dirty;
		}
		if ($this->propertyType !== null) {
			$array['propertyType'] = $this->propertyType;
		}
		if ($this->value !== null) {
			$array['value'] = $this->value;
		}
		return $array;
	}
}