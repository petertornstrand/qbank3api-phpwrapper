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

class PropertySet implements \JsonSerializable  {



	/**
	 * The PropertySet identifier
	 * @var int
	 */
	protected $id;

	/**
	 * The PropertySet name.
	 * @var string
	 */
	protected $name;

	/**
	 * When the PropertySet was created.
	 * @var DateTime
	 */
	protected $created;

	/**
	 * The identifier of the User who created the PropertySet.
	 * @var int
	 */
	protected $createdBy;

	/**
	 * When the PropertySet was updated.
	 * @var DateTime
	 */
	protected $updated;

	/**
	 * Which user who updated the PropertySet.
	 * @var int
	 */
	protected $updatedBy;

	/**
	 * Whether the PropertySet is deleted.
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * Whether the PropertySet has been modified since constructed.
	 * @var boolean
	 */
	protected $dirty;

	/**
	 * Wheater the PropertySet is a system propertyset or not. (System propertysets are hidden from the enduser)
	 * @var boolean
	 */
	protected $system;

	/**
	 * The Properties associated with the PropertySet.
	 * @var Property[]
	 */
	protected $properties;


	/**
	 * Constructs a {@link PropertySet }.
	 * @param array $parameters An array of parameters to initialize the {@link PropertySet } with.
	 * - <b>id</b> - The PropertySet identifier
	 * - <b>name</b> - The PropertySet name.
	 * - <b>created</b> - When the PropertySet was created.
	 * - <b>createdBy</b> - The identifier of the User who created the PropertySet.
	 * - <b>updated</b> - When the PropertySet was updated.
	 * - <b>updatedBy</b> - Which user who updated the PropertySet.
	 * - <b>deleted</b> - Whether the PropertySet is deleted.
	 * - <b>dirty</b> - Whether the PropertySet has been modified since constructed.
	 * - <b>system</b> - Wheater the PropertySet is a system propertyset or not. (System propertysets are hidden from the enduser)
	 * - <b>properties</b> - The Properties associated with the PropertySet.
	 * 
	 */
	public function __construct($parameters) {
		
		
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['name'])) {
			$this->setName($parameters['name']);
		}
	
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
	
		if (isset($parameters['system'])) {
			$this->setSystem($parameters['system']);
		}
	
		if (isset($parameters['properties'])) {
			$this->setProperties($parameters['properties']);
		}
	
	}


	/**
	 * Gets the id of the PropertySet
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the name of the PropertySet
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the created of the PropertySet
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the PropertySet
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the PropertySet
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the PropertySet
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the deleted of the PropertySet
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets the dirty of the PropertySet
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the system of the PropertySet
	 * @return boolean
	 */
	public function getSystem() {
		return $this->system;
	}

	/**
	 * Gets the properties of the PropertySet
	 * @return Property[]
	 */
	public function getProperties() {
		return $this->properties;
	}



	/**
	 * Sets the "id" of the PropertySet
	 * @param int $id
	 * @return $this
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "name" of the PropertySet
	 * @param string $name
	 * @return $this
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "created" of the PropertySet
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
	 * Sets the "createdBy" of the PropertySet
	 * @param int $createdBy
	 * @return $this
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the PropertySet
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
	 * Sets the "updatedBy" of the PropertySet
	 * @param int $updatedBy
	 * @return $this
	 */
	public function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "deleted" of the PropertySet
	 * @param boolean $deleted
	 * @return $this
	 */
	public function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "dirty" of the PropertySet
	 * @param boolean $dirty
	 * @return $this
	 */
	public function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "system" of the PropertySet
	 * @param boolean $system
	 * @return $this
	 */
	public function setSystem($system) {
		$this->system = (bool)$system;
		return $this;
	}

	/**
	 * Sets the "properties" of the PropertySet
	 * @param Property[] $properties
	 * @return $this
	 */
	public function setProperties($properties) {
		if (is_array($properties)) {
			$this->properties = array();
			foreach ($properties as $item) {
				if (!($item instanceof Property)) {
					if (is_array($item)) {
						try {
							$item = new Property($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate Property. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "Property"!', E_USER_WARNING);
						continue;
					}
				}
				$this->properties[] = $item;
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
		if ($this->name !== null) {
			$array['name'] = $this->name;
		}
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
		if ($this->system !== null) {
			$array['system'] = $this->system;
		}
		if ($this->properties !== null) {
			$array['properties'] = $this->properties;
		}
		return $array;
	}
}