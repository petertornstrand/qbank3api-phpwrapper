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

class ExtraData implements \JsonSerializable  {



	/**
	 * The ExtraData identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * Whether the object has been modified since constructed.
	 * @var boolean
	 */
	protected $dirty;

	/**
	 * Indicates if this ExtraData is deleted
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * When the ExtraData was created.
	 * @var DateTime
	 */
	protected $created;

	/**
	 * The User Id that created the ExtraData
	 * @var int
	 */
	protected $createdBy;

	/**
	 * When the ExtraData was updated.
	 * @var DateTime
	 */
	protected $updated;

	/**
	 * User Id that updated the ExtraData
	 * @var int
	 */
	protected $updatedBy;

	/**
	 * The ExtraData key
	 * @var string
	 */
	protected $key;

	/**
	 * The ExtraData Key Identifier
	 * @var int
	 */
	protected $keyId;

	/**
	 * The value of the ExtraData
	 * @var string
	 */
	protected $value;


	/**
	 * Constructs a {@link ExtraData }.
	 * @param array $parameters An array of parameters to initialize the {@link ExtraData } with.
	 * - <b>id</b> - The ExtraData identifier.
	 * - <b>dirty</b> - Whether the object has been modified since constructed.
	 * - <b>deleted</b> - Indicates if this ExtraData is deleted
	 * - <b>created</b> - When the ExtraData was created.
	 * - <b>createdBy</b> - The User Id that created the ExtraData
	 * - <b>updated</b> - When the ExtraData was updated.
	 * - <b>updatedBy</b> - User Id that updated the ExtraData
	 * - <b>key</b> - The ExtraData key
	 * - <b>keyId</b> - The ExtraData Key Identifier
	 * - <b>value</b> - The value of the ExtraData
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
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
	
		if (isset($parameters['key'])) {
			$this->setKey($parameters['key']);
		}
	
		if (isset($parameters['keyId'])) {
			$this->setKeyId($parameters['keyId']);
		}
	
		if (isset($parameters['value'])) {
			$this->setValue($parameters['value']);
		}
	
	}


	/**
	 * Gets the id of the ExtraData
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the dirty of the ExtraData
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the deleted of the ExtraData
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets the created of the ExtraData
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the ExtraData
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the ExtraData
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the ExtraData
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the key of the ExtraData
	 * @return string
	 */
	public function getKey() {
		return $this->key;
	}

	/**
	 * Gets the keyId of the ExtraData
	 * @return int
	 */
	public function getKeyId() {
		return $this->keyId;
	}

	/**
	 * Gets the value of the ExtraData
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}



	/**
	 * Sets the "id" of the ExtraData
	 * @param int $id
	 * @return $this
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "dirty" of the ExtraData
	 * @param boolean $dirty
	 * @return $this
	 */
	public function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "deleted" of the ExtraData
	 * @param boolean $deleted
	 * @return $this
	 */
	public function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "created" of the ExtraData
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
	 * Sets the "createdBy" of the ExtraData
	 * @param int $createdBy
	 * @return $this
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the ExtraData
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
	 * Sets the "updatedBy" of the ExtraData
	 * @param int $updatedBy
	 * @return $this
	 */
	public function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "key" of the ExtraData
	 * @param string $key
	 * @return $this
	 */
	public function setKey($key) {
		$this->key = $key;
		return $this;
	}

	/**
	 * Sets the "keyId" of the ExtraData
	 * @param int $keyId
	 * @return $this
	 */
	public function setKeyId($keyId) {
		$this->keyId = $keyId;
		return $this;
	}

	/**
	 * Sets the "value" of the ExtraData
	 * @param string $value
	 * @return $this
	 */
	public function setValue($value) {
		$this->value = $value;
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
		if ($this->key !== null) {
			$array['key'] = $this->key;
		}
		if ($this->keyId !== null) {
			$array['keyId'] = $this->keyId;
		}
		if ($this->value !== null) {
			$array['value'] = $this->value;
		}
		return $array;
	}
}