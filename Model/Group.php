<?php

namespace QBNK\QBank\API\Model;

use \DateTime;
use \Exception;


/**
 * Description of what this Group means
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Group implements \JsonSerializable  {



	/**
	 * The Group identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * The name of the Group
	 * @var string
	 */
	protected $name;

	/**
	 * Description of what this Group means
	 * @var string
	 */
	protected $description;

	/**
	 * Whether the object has been modified since constructed.
	 * @var boolean
	 */
	protected $dirty;

	/**
	 * Indicates if this Group is deleted
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * When the Group was created.
	 * @var DateTime
	 */
	protected $created;

	/**
	 * The User Id that created the Group
	 * @var int
	 */
	protected $createdBy;

	/**
	 * When the Group was updated.
	 * @var DateTime
	 */
	protected $updated;

	/**
	 * User Id that updated the Group
	 * @var int
	 */
	protected $updatedBy;

	/**
	 * An array of Functionalities connected to this Group
	 * @var Array
	 */
	protected $functionalities;

	/**
	 * An array of Roles connected to this Group
	 * @var Array
	 */
	protected $roles;

	/**
	 * An array of ExtraData connected to this Group.
	 * @var Array
	 */
	protected $extraData;


	/**
	 * Constructs a {@link Group }.
	 * @param array $parameters An array of parameters to initialize the {@link Group } with.
	 * - <b>id</b> - The Group identifier.
	 * - <b>name</b> - The name of the Group
	 * - <b>description</b> - Description of what this Group means
	 * - <b>dirty</b> - Whether the object has been modified since constructed.
	 * - <b>deleted</b> - Indicates if this Group is deleted
	 * - <b>created</b> - When the Group was created.
	 * - <b>createdBy</b> - The User Id that created the Group
	 * - <b>updated</b> - When the Group was updated.
	 * - <b>updatedBy</b> - User Id that updated the Group
	 * - <b>functionalities</b> - An array of Functionalities connected to this Group
	 * - <b>roles</b> - An array of Roles connected to this Group
	 * - <b>extraData</b> - An array of ExtraData connected to this Group.
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
	
		if (isset($parameters['dirty'])) {
			$this->setDirty($parameters['dirty']);
		}
	
		if (isset($parameters['deleted'])) {
			$this->setDeleted($parameters['deleted']);
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
	
		if (isset($parameters['functionalities'])) {
			$this->setFunctionalities($parameters['functionalities']);
		}
	
		if (isset($parameters['roles'])) {
			$this->setRoles($parameters['roles']);
		}
	
		if (isset($parameters['extraData'])) {
			$this->setExtraData($parameters['extraData']);
		}
	
	}


	/**
	 * Gets the id of the Group
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the name of the Group
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the description of the Group
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Gets the dirty of the Group
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the deleted of the Group
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets the created of the Group
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the Group
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the Group
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the Group
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the functionalities of the Group
	 * @return Array
	 */
	public function getFunctionalities() {
		return $this->functionalities;
	}

	/**
	 * Gets the roles of the Group
	 * @return Array
	 */
	public function getRoles() {
		return $this->roles;
	}

	/**
	 * Gets the extraData of the Group
	 * @return Array
	 */
	public function getExtraData() {
		return $this->extraData;
	}



	/**
	 * Sets the "id" of the Group
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "name" of the Group
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "description" of the Group
	 * @param string $description
	 * @return $this
	 */
	protected function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Sets the "dirty" of the Group
	 * @param boolean $dirty
	 * @return $this
	 */
	protected function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "deleted" of the Group
	 * @param boolean $deleted
	 * @return $this
	 */
	protected function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "created" of the Group
	 * @param DateTime $created
	 * @return $this
	 */
	protected function setCreated($created) {
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
	 * Sets the "createdBy" of the Group
	 * @param int $createdBy
	 * @return $this
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the Group
	 * @param DateTime $updated
	 * @return $this
	 */
	protected function setUpdated($updated) {
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
	 * Sets the "updatedBy" of the Group
	 * @param int $updatedBy
	 * @return $this
	 */
	protected function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "functionalities" of the Group
	 * @param Functionality[] $functionalities
	 * @return $this
	 */
	protected function setFunctionalities($functionalities) {
		if (is_array($functionalities)) {
			$this->functionalities = array();
			foreach ($functionalities as $item) {
				if (!($item instanceof Functionality)) {
					if (is_array($item)) {
						try {
							$item = new Functionality($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate Functionality. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "Functionality"!', E_USER_WARNING);
						continue;
					}
				}
				$this->functionalities[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "roles" of the Group
	 * @param Role[] $roles
	 * @return $this
	 */
	protected function setRoles($roles) {
		if (is_array($roles)) {
			$this->roles = array();
			foreach ($roles as $item) {
				if (!($item instanceof Role)) {
					if (is_array($item)) {
						try {
							$item = new Role($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate Role. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "Role"!', E_USER_WARNING);
						continue;
					}
				}
				$this->roles[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "extraData" of the Group
	 * @param ExtraData[] $extraData
	 * @return $this
	 */
	protected function setExtraData($extraData) {
		if (is_array($extraData)) {
			$this->extraData = array();
			foreach ($extraData as $item) {
				if (!($item instanceof ExtraData)) {
					if (is_array($item)) {
						try {
							$item = new ExtraData($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate ExtraData. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "ExtraData"!', E_USER_WARNING);
						continue;
					}
				}
				$this->extraData[] = $item;
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
		if ($this->description !== null) {
			$array['description'] = $this->description;
		}
		if ($this->dirty !== null) {
			$array['dirty'] = $this->dirty;
		}
		if ($this->deleted !== null) {
			$array['deleted'] = $this->deleted;
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
		if ($this->functionalities !== null) {
			$array['functionalities'] = $this->functionalities;
		}
		if ($this->roles !== null) {
			$array['roles'] = $this->roles;
		}
		if ($this->extraData !== null) {
			$array['extraData'] = $this->extraData;
		}
		return $array;
	}
}