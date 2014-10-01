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

class Folder implements \JsonSerializable  {



	/**
	 * The Folder identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * The Folder's children, ie. subfolders.
	 * @var Folder[]
	 */
	protected $subFolders;

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
	 * @var PropertySet[]
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
	 * Constructs a {@link Folder }.
	 * @param array $parameters An array of parameters to initialize the {@link Folder } with.
	 * - <b>id</b> - The Folder identifier.
	 * - <b>subFolders</b> - The Folder's children, ie. subfolders.
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
	
		if (isset($parameters['subFolders'])) {
			$this->setSubFolders($parameters['subFolders']);
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
	 * Gets the id of the Folder
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the subFolders of the Folder
	 * @return Folder[]
	 */
	public function getSubFolders() {
		return $this->subFolders;
	}

	/**
	 * Gets the objectId of the Folder
	 * @return int
	 */
	public function getObjectId() {
		return $this->objectId;
	}

	/**
	 * Gets the name of the Folder
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the created of the Folder
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the Folder
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the Folder
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the Folder
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the deleted of the Folder
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets the propertySets of the Folder
	 * @return PropertySet[]
	 */
	public function getPropertySets() {
		return $this->propertySets;
	}

	/**
	 * Gets the dirty of the Folder
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the typeId of the Folder
	 * @return int
	 */
	public function getTypeId() {
		return $this->typeId;
	}



	/**
	 * Sets the "id" of the Folder
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "subFolders" of the Folder
	 * @param Folder[] $subFolders
	 * @return $this
	 */
	protected function setSubFolders($subFolders) {
		if (is_array($subFolders)) {
			$this->subFolders = array();
			foreach ($subFolders as $item) {
				if (!($item instanceof Folder)) {
					if (is_array($item)) {
						try {
							$item = new Folder($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate Folder. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "Folder"!', E_USER_WARNING);
						continue;
					}
				}
				$this->subFolders[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "objectId" of the Folder
	 * @param int $objectId
	 * @return $this
	 */
	protected function setObjectId($objectId) {
		$this->objectId = $objectId;
		return $this;
	}

	/**
	 * Sets the "name" of the Folder
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "created" of the Folder
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
	 * Sets the "createdBy" of the Folder
	 * @param int $createdBy
	 * @return $this
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the Folder
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
	 * Sets the "updatedBy" of the Folder
	 * @param int $updatedBy
	 * @return $this
	 */
	protected function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "deleted" of the Folder
	 * @param boolean $deleted
	 * @return $this
	 */
	protected function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "propertySets" of the Folder
	 * @param PropertySet[] $propertySets
	 * @return $this
	 */
	protected function setPropertySets($propertySets) {
		if (is_array($propertySets)) {
			$this->propertySets = array();
			foreach ($propertySets as $item) {
				if (!($item instanceof PropertySet)) {
					if (is_array($item)) {
						try {
							$item = new PropertySet($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate PropertySet. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "PropertySet"!', E_USER_WARNING);
						continue;
					}
				}
				$this->propertySets[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "dirty" of the Folder
	 * @param boolean $dirty
	 * @return $this
	 */
	protected function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "typeId" of the Folder
	 * @param int $typeId
	 * @return $this
	 */
	protected function setTypeId($typeId) {
		$this->typeId = $typeId;
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
		if ($this->subFolders !== null) {
			$array['subFolders'] = $this->subFolders;
		}
		if ($this->objectId !== null) {
			$array['objectId'] = $this->objectId;
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
		if ($this->propertySets !== null) {
			$array['propertySets'] = $this->propertySets;
		}
		if ($this->dirty !== null) {
			$array['dirty'] = $this->dirty;
		}
		if ($this->typeId !== null) {
			$array['typeId'] = $this->typeId;
		}
		return $array;
	}
}