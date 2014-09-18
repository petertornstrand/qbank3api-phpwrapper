<?php

namespace QBNK\QBank\API\Model;

use \DateTime;
use \Exception;


/**
 * Description of what this Role means
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Role implements \JsonSerializable  {



	/**
	 * The Role identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * The name of the Role
	 * @var string
	 */
	protected $name;

	/**
	 * Description of what this Role means
	 * @var string
	 */
	protected $description;

	/**
	 * Whether the object has been modified since constructed.
	 * @var boolean
	 */
	protected $dirty;

	/**
	 * Indicates if this Role is deleted
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * When the Role was created.
	 * @var DateTime
	 */
	protected $created;

	/**
	 * The User Id that created the Role
	 * @var int
	 */
	protected $createdBy;

	/**
	 * When the Role was updated.
	 * @var DateTime
	 */
	protected $updated;

	/**
	 * User Id that updated the Role
	 * @var int
	 */
	protected $updatedBy;

	/**
	 * An array of Functionalities connected to this role
	 * @var Array
	 */
	protected $functionalities;


	/**
	 * Constructs a {@link Role }.
	 * @param array $parameters An array of parameters to initialize the {@link Role } with.
	 * - <b>id</b> - The Role identifier.
	 * - <b>name</b> - The name of the Role
	 * - <b>description</b> - Description of what this Role means
	 * - <b>dirty</b> - Whether the object has been modified since constructed.
	 * - <b>deleted</b> - Indicates if this Role is deleted
	 * - <b>created</b> - When the Role was created.
	 * - <b>createdBy</b> - The User Id that created the Role
	 * - <b>updated</b> - When the Role was updated.
	 * - <b>updatedBy</b> - User Id that updated the Role
	 * - <b>functionalities</b> - An array of Functionalities connected to this role
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
	
	}


	/**
	 * Gets the id of the Role
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the name of the Role
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the description of the Role
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Gets the dirty of the Role
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the deleted of the Role
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets the created of the Role
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the Role
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the Role
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the Role
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the functionalities of the Role
	 * @return Array
	 */
	public function getFunctionalities() {
		return $this->functionalities;
	}



	/**
	 * Sets the "id" of the Role
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "name" of the Role
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "description" of the Role
	 * @param string $description
	 * @return $this
	 */
	protected function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Sets the "dirty" of the Role
	 * @param boolean $dirty
	 * @return $this
	 */
	protected function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "deleted" of the Role
	 * @param boolean $deleted
	 * @return $this
	 */
	protected function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "created" of the Role
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
	 * Sets the "createdBy" of the Role
	 * @param int $createdBy
	 * @return $this
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the Role
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
	 * Sets the "updatedBy" of the Role
	 * @param int $updatedBy
	 * @return $this
	 */
	protected function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "functionalities" of the Role
	 * @param Array $functionalities
	 * @return $this
	 */
	protected function setFunctionalities($functionalities) {
		if (is_array($functionalities)) {
			$this->functionalities = array();
			foreach ($functionalities as $item) {
				$this->functionalities[] = new Functionality($item);
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
		return $array;
	}
}