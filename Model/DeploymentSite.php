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

class DeploymentSite implements \JsonSerializable  {



	/**
	 * The DeploymentSite identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * The human readable description of the DeploymentSite.
	 * @var string
	 */
	protected $description;

	/**
	 * The Protocol used to deploy to the DeploymentSite.
	 * @var Protocol
	 */
	protected $protocol;

	/**
	 * A key-value object with the Protocol specific values.
	 * @var Object
	 */
	protected $definition;

	/**
	 * The domain name of the server for the DeploymentSite.
	 * @var string
	 */
	protected $viewserver;

	/**
	 * The url path to were files are accessible for the DeploymentSite.
	 * @var string
	 */
	protected $viewpath;

	/**
	 * The pattern used for naming the files.
	 * @var string
	 */
	protected $namingpattern;

	/**
	 * Whether grouped Media should be deployed.
	 * @var boolean
	 */
	protected $children;

	/**
	 * The color associated with the DeploymentSite as a #-prepended hexadecimal string.
	 * @var string
	 */
	protected $color;

	/**
	 * The connected ImageTemplates.
	 * @var Image[]
	 */
	protected $imagetemplates;

	/**
	 * The connected VideoTemplates.
	 * @var \QBNK\QBank\Api\v1\Model\Templates\Video[]
	 */
	protected $videotemplates;

	/**
	 * The connected Categories.
	 * @var Category[]
	 */
	protected $categories;

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
	 * Constructs a {@link DeploymentSite }.
	 * @param array $parameters An array of parameters to initialize the {@link DeploymentSite } with.
	 * - <b>id</b> - The DeploymentSite identifier.
	 * - <b>description</b> - The human readable description of the DeploymentSite.
	 * - <b>protocol</b> - The Protocol used to deploy to the DeploymentSite.
	 * - <b>definition</b> - A key-value object with the Protocol specific values.
	 * - <b>viewserver</b> - The domain name of the server for the DeploymentSite.
	 * - <b>viewpath</b> - The url path to were files are accessible for the DeploymentSite.
	 * - <b>namingpattern</b> - The pattern used for naming the files.
	 * - <b>children</b> - Whether grouped Media should be deployed.
	 * - <b>color</b> - The color associated with the DeploymentSite as a #-prepended hexadecimal string.
	 * - <b>imagetemplates</b> - The connected ImageTemplates.
	 * - <b>videotemplates</b> - The connected VideoTemplates.
	 * - <b>categories</b> - The connected Categories.
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
		
		$this->propertySets = array();
		
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['description'])) {
			$this->setDescription($parameters['description']);
		}
	
		if (isset($parameters['protocol'])) {
			$this->setProtocol($parameters['protocol']);
		}
	
		if (isset($parameters['definition'])) {
			$this->setDefinition($parameters['definition']);
		}
	
		if (isset($parameters['viewserver'])) {
			$this->setViewserver($parameters['viewserver']);
		}
	
		if (isset($parameters['viewpath'])) {
			$this->setViewpath($parameters['viewpath']);
		}
	
		if (isset($parameters['namingpattern'])) {
			$this->setNamingpattern($parameters['namingpattern']);
		}
	
		if (isset($parameters['children'])) {
			$this->setChildren($parameters['children']);
		}
	
		if (isset($parameters['color'])) {
			$this->setColor($parameters['color']);
		}
	
		if (isset($parameters['imagetemplates'])) {
			$this->setImagetemplates($parameters['imagetemplates']);
		}
	
		if (isset($parameters['videotemplates'])) {
			$this->setVideotemplates($parameters['videotemplates']);
		}
	
		if (isset($parameters['categories'])) {
			$this->setCategories($parameters['categories']);
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
	 * Gets the id of the DeploymentSite
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the description of the DeploymentSite
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Gets the protocol of the DeploymentSite
	 * @return Protocol
	 */
	public function getProtocol() {
		return $this->protocol;
	}

	/**
	 * Gets the definition of the DeploymentSite
	 * @return Object
	 */
	public function getDefinition() {
		return $this->definition;
	}

	/**
	 * Gets the viewserver of the DeploymentSite
	 * @return string
	 */
	public function getViewserver() {
		return $this->viewserver;
	}

	/**
	 * Gets the viewpath of the DeploymentSite
	 * @return string
	 */
	public function getViewpath() {
		return $this->viewpath;
	}

	/**
	 * Gets the namingpattern of the DeploymentSite
	 * @return string
	 */
	public function getNamingpattern() {
		return $this->namingpattern;
	}

	/**
	 * Gets the children of the DeploymentSite
	 * @return boolean
	 */
	public function getChildren() {
		return $this->children;
	}

	/**
	 * Gets the color of the DeploymentSite
	 * @return string
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Gets the imagetemplates of the DeploymentSite
	 * @return Image[]
	 */
	public function getImagetemplates() {
		return $this->imagetemplates;
	}

	/**
	 * Gets the videotemplates of the DeploymentSite
	 * @return \QBNK\QBank\Api\v1\Model\Templates\Video[]
	 */
	public function getVideotemplates() {
		return $this->videotemplates;
	}

	/**
	 * Gets the categories of the DeploymentSite
	 * @return Category[]
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Gets the objectId of the DeploymentSite
	 * @return int
	 */
	public function getObjectId() {
		return $this->objectId;
	}

	/**
	 * Gets the name of the DeploymentSite
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the created of the DeploymentSite
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the DeploymentSite
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the DeploymentSite
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the DeploymentSite
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the deleted of the DeploymentSite
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets a property from the first available PropertySet
	 * @param string $systemName The system name of the property to get.
	 * @throws QBankApiException Thrown if the requested property does not exist.
	 * @return Property
	 */
	public function getProperty($systemName) {
		foreach ($this->propertySets as $propertySet) {
			foreach ($propertySet->getProperties() as $property) {
				if ($property->getPropertyType()->getSystemName() == $systemName) {
					return $property;
				}
			}
		}
		throw new QBankApiException('No Property with the system name "'.$systemName.'" exists.');
	}
	/**
	 * Gets the propertySets of the DeploymentSite
	 * @return PropertySet[]
	 */
	public function getPropertySets() {
		return $this->propertySets;
	}

	/**
	 * Gets the dirty of the DeploymentSite
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the typeId of the DeploymentSite
	 * @return int
	 */
	public function getTypeId() {
		return $this->typeId;
	}



	/**
	 * Sets the "id" of the DeploymentSite
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "description" of the DeploymentSite
	 * @param string $description
	 * @return $this
	 */
	protected function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Sets the "protocol" of the DeploymentSite
	 * @param Protocol $protocol
	 * @return $this
	 */
	protected function setProtocol($protocol) {
		if ($protocol instanceof Protocol) {
			$this->protocol = $protocol;
		} else if (is_array($protocol)) {
			$this->protocol = new Protocol($protocol);
		} else {
			$this->protocol = null;
			trigger_error('Argument must be an object of class Protocol. Data loss!', E_USER_WARNING);
		}
		return $this;
	}

	/**
	 * Sets the "definition" of the DeploymentSite
	 * @param Object $definition
	 * @return $this
	 */
	protected function setDefinition($definition) {
		$this->definition = $definition;
		return $this;
	}

	/**
	 * Sets the "viewserver" of the DeploymentSite
	 * @param string $viewserver
	 * @return $this
	 */
	protected function setViewserver($viewserver) {
		$this->viewserver = $viewserver;
		return $this;
	}

	/**
	 * Sets the "viewpath" of the DeploymentSite
	 * @param string $viewpath
	 * @return $this
	 */
	protected function setViewpath($viewpath) {
		$this->viewpath = $viewpath;
		return $this;
	}

	/**
	 * Sets the "namingpattern" of the DeploymentSite
	 * @param string $namingpattern
	 * @return $this
	 */
	protected function setNamingpattern($namingpattern) {
		$this->namingpattern = $namingpattern;
		return $this;
	}

	/**
	 * Sets the "children" of the DeploymentSite
	 * @param boolean $children
	 * @return $this
	 */
	protected function setChildren($children) {
		$this->children = (bool)$children;
		return $this;
	}

	/**
	 * Sets the "color" of the DeploymentSite
	 * @param string $color
	 * @return $this
	 */
	protected function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Sets the "imagetemplates" of the DeploymentSite
	 * @param Image[] $imagetemplates
	 * @return $this
	 */
	protected function setImagetemplates($imagetemplates) {
		if (is_array($imagetemplates)) {
			$this->imagetemplates = array();
			foreach ($imagetemplates as $item) {
				if (!($item instanceof Image)) {
					if (is_array($item)) {
						try {
							$item = new Image($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate Image. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "Image"!', E_USER_WARNING);
						continue;
					}
				}
				$this->imagetemplates[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "videotemplates" of the DeploymentSite
	 * @param \QBNK\QBank\Api\v1\Model\Templates\Video[] $videotemplates
	 * @return $this
	 */
	protected function setVideotemplates($videotemplates) {
		if (is_array($videotemplates)) {
			$this->videotemplates = array();
			foreach ($videotemplates as $item) {
				if (!($item instanceof \QBNK\QBank\Api\v1\Model\Templates\Video)) {
					if (is_array($item)) {
						try {
							$item = new \QBNK\QBank\Api\v1\Model\Templates\Video($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate \QBNK\QBank\Api\v1\Model\Templates\Video. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "\QBNK\QBank\Api\v1\Model\Templates\Video"!', E_USER_WARNING);
						continue;
					}
				}
				$this->videotemplates[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "categories" of the DeploymentSite
	 * @param Category[] $categories
	 * @return $this
	 */
	protected function setCategories($categories) {
		if (is_array($categories)) {
			$this->categories = array();
			foreach ($categories as $item) {
				if (!($item instanceof Category)) {
					if (is_array($item)) {
						try {
							$item = new Category($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate Category. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "Category"!', E_USER_WARNING);
						continue;
					}
				}
				$this->categories[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "objectId" of the DeploymentSite
	 * @param int $objectId
	 * @return $this
	 */
	protected function setObjectId($objectId) {
		$this->objectId = $objectId;
		return $this;
	}

	/**
	 * Sets the "name" of the DeploymentSite
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "created" of the DeploymentSite
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
	 * Sets the "createdBy" of the DeploymentSite
	 * @param int $createdBy
	 * @return $this
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the DeploymentSite
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
	 * Sets the "updatedBy" of the DeploymentSite
	 * @param int $updatedBy
	 * @return $this
	 */
	protected function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "deleted" of the DeploymentSite
	 * @param boolean $deleted
	 * @return $this
	 */
	protected function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "propertySets" of the DeploymentSite
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
	 * Sets the "dirty" of the DeploymentSite
	 * @param boolean $dirty
	 * @return $this
	 */
	protected function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "typeId" of the DeploymentSite
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
		if ($this->description !== null) {
			$array['description'] = $this->description;
		}
		if ($this->protocol !== null) {
			$array['protocol'] = $this->protocol;
		}
		if ($this->definition !== null) {
			$array['definition'] = $this->definition;
		}
		if ($this->viewserver !== null) {
			$array['viewserver'] = $this->viewserver;
		}
		if ($this->viewpath !== null) {
			$array['viewpath'] = $this->viewpath;
		}
		if ($this->namingpattern !== null) {
			$array['namingpattern'] = $this->namingpattern;
		}
		if ($this->children !== null) {
			$array['children'] = $this->children;
		}
		if ($this->color !== null) {
			$array['color'] = $this->color;
		}
		if ($this->imagetemplates !== null) {
			$array['imagetemplates'] = $this->imagetemplates;
		}
		if ($this->videotemplates !== null) {
			$array['videotemplates'] = $this->videotemplates;
		}
		if ($this->categories !== null) {
			$array['categories'] = $this->categories;
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