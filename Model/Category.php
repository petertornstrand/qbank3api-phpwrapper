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

class Category {

	/**
	 * The Category identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * The ObjectType identifier Media belonging to this Category should have.
	 * @var int
	 */
	protected $mediaTypeId;

	/**
	 * The base Object identifier.
	 * @var int
	 */
	protected $objectId;

	/**
	 * The Objects name.
	 * @var string
	 */
	protected $name;

	/**
	 * When the Object was created.
	 * @var DateTime
	 */
	protected $created;

	/**
	 * The identifier of the User who created the Object.
	 * @var int
	 */
	protected $createdBy;

	/**
	 * When the Object was updated.
	 * @var DateTime
	 */
	protected $updated;

	/**
	 * Which user who updated the Object.
	 * @var int
	 */
	protected $updatedBy;

	/**
	 * Whether the object is deleted.
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * The objects PropertySets.
	 * @var Array
	 */
	protected $propertySets;

	/**
	 * Whether the object has been modified since constructed.
	 * @var boolean
	 */
	protected $dirty;

	/**
	 * The identifier of the ObjectType describing the propertysets this object should use.
	 * @var int
	 */
	protected $typeId;


	/**
	 * Constructs a {@link Category }.
	 * @param array $parameters An array of parameters to initialize the {@link Category } with.
	 * - <b>id</b> - The Category identifier.
	 * - <b>mediaTypeId</b> - The ObjectType identifier Media belonging to this Category should have.
	 * - <b>objectId</b> - The base Object identifier.
	 * - <b>name</b> - The Objects name.
	 * - <b>created</b> - When the Object was created.
	 * - <b>createdBy</b> - The identifier of the User who created the Object.
	 * - <b>updated</b> - When the Object was updated.
	 * - <b>updatedBy</b> - Which user who updated the Object.
	 * - <b>deleted</b> - Whether the object is deleted.
	 * - <b>propertySets</b> - The objects PropertySets.
	 * - <b>dirty</b> - Whether the object has been modified since constructed.
	 * - <b>typeId</b> - The identifier of the ObjectType describing the propertysets this object should use.
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['mediaTypeId'])) {
			$this->setMediaTypeId($parameters['mediaTypeId']);
		}
	
		if (isset($parameters['objectId'])) {
			$this->setObjectId($parameters['objectId']);
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
	
		if (isset($parameters['propertySets'])) {
			$this->setPropertySets($parameters['propertySets']);
		}
	
		if (isset($parameters['dirty'])) {
			$this->setDirty($parameters['dirty']);
		}
	
		if (isset($parameters['typeId'])) {
			$this->setTypeId($parameters['typeId']);
		}
	
	}


	/**
	 * Gets the id of the Category
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the mediaTypeId of the Category
	 * @return int
	 */
	public function getMediaTypeId() {
		return $this->mediaTypeId;
	}

	/**
	 * Gets the objectId of the Category
	 * @return int
	 */
	public function getObjectId() {
		return $this->objectId;
	}

	/**
	 * Gets the name of the Category
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the created of the Category
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the Category
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the Category
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the Category
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the deleted of the Category
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets the propertySets of the Category
	 * @return Array
	 */
	public function getPropertySets() {
		return $this->propertySets;
	}

	/**
	 * Gets the dirty of the Category
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the typeId of the Category
	 * @return int
	 */
	public function getTypeId() {
		return $this->typeId;
	}



	/**
	 * Sets the "id" of the Category
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "mediaTypeId" of the Category
	 * @param int $mediaTypeId
	 * @return $this
	 */
	protected function setMediaTypeId($mediaTypeId) {
		$this->mediaTypeId = $mediaTypeId;
		return $this;
	}

	/**
	 * Sets the "objectId" of the Category
	 * @param int $objectId
	 * @return $this
	 */
	protected function setObjectId($objectId) {
		$this->objectId = $objectId;
		return $this;
	}

	/**
	 * Sets the "name" of the Category
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "created" of the Category
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
	 * Sets the "createdBy" of the Category
	 * @param int $createdBy
	 * @return $this
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the Category
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
	 * Sets the "updatedBy" of the Category
	 * @param int $updatedBy
	 * @return $this
	 */
	protected function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "deleted" of the Category
	 * @param boolean $deleted
	 * @return $this
	 */
	protected function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "propertySets" of the Category
	 * @param Array $propertySets
	 * @return $this
	 */
	protected function setPropertySets($propertySets) {
		if (is_array($propertySets)) {
			$this->propertySets = array();
			foreach ($propertySets as $item) {
				$this->propertySets[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "dirty" of the Category
	 * @param boolean $dirty
	 * @return $this
	 */
	protected function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "typeId" of the Category
	 * @param int $typeId
	 * @return $this
	 */
	protected function setTypeId($typeId) {
		$this->typeId = $typeId;
		return $this;
	}
}