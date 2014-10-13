<?php

namespace QBNK\QBank\API\Model;

use QBNK\QBank\API\QBankApiException;
use \DateTime;
use \Exception;


/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Media implements \JsonSerializable  {


	const TEMPLATE_IMAGE = 'image';
	const TEMPLATE_VIDEO = 'video';

	/**
	 * The Media identifier.
	 * @var int
	 */
	protected $mediaId;

	/**
	 * The Category identifier of the Category the Media belongs to.
	 * @var int
	 */
	protected $categoryId;

	/**
	 * The Media's filename extension.
	 * @var string
	 */
	protected $extension;

	/**
	 * The Media's filename.
	 * @var string
	 */
	protected $filename;

	/**
	 * The Media status identifier.
	 * @var int
	 */
	protected $statusId;

	/**
	 * The MetaData extracted from the Media file.
	 * @var MetaData[]
	 */
	protected $metadata;

	/**
	 * The Media MimeType.
	 * @var MimeType
	 */
	protected $mimetype;

	/**
	 * The Media parent Media identifier. Only set when the Media is grouped.
	 * @var int
	 */
	protected $parentId;

	/**
	 * The Media replacement Media identifier. Only set when the Media has been replaced, ie. versioning.
	 * @var int
	 */
	protected $replacedBy;

	/**
	 * The Media size in bytes.
	 * @var int
	 */
	protected $size;

	/**
	 * When the Media was uploaded. A datetime string on the format ISO8601.
	 * @var string
	 */
	protected $uploaded;

	/**
	 * The identifier of the User who uploaded the Media.
	 * @var int
	 */
	protected $uploadedBy;

	/**
	 * An array of deployed files
	 * @var DeploymentFile[]
	 */
	protected $deployedFiles;

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
	 * Constructs a {@link Media }.
	 * @param array $parameters An array of parameters to initialize the {@link Media } with.
	 * - <b>mediaId</b> - The Media identifier.
	 * - <b>categoryId</b> - The Category identifier of the Category the Media belongs to.
	 * - <b>extension</b> - The Media's filename extension.
	 * - <b>filename</b> - The Media's filename.
	 * - <b>statusId</b> - The Media status identifier.
	 * - <b>metadata</b> - The MetaData extracted from the Media file.
	 * - <b>mimetype</b> - The Media MimeType.
	 * - <b>parentId</b> - The Media parent Media identifier. Only set when the Media is grouped.
	 * - <b>replacedBy</b> - The Media replacement Media identifier. Only set when the Media has been replaced, ie. versioning.
	 * - <b>size</b> - The Media size in bytes.
	 * - <b>uploaded</b> - When the Media was uploaded. A datetime string on the format ISO8601.
	 * - <b>uploadedBy</b> - The identifier of the User who uploaded the Media.
	 * - <b>deployedFiles</b> - An array of deployed files
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
		
		$this->deployedFiles = array();
		$this->propertySets = array();
		
		
		if (isset($parameters['mediaId'])) {
			$this->setMediaId($parameters['mediaId']);
		}
	
		if (isset($parameters['categoryId'])) {
			$this->setCategoryId($parameters['categoryId']);
		}
	
		if (isset($parameters['extension'])) {
			$this->setExtension($parameters['extension']);
		}
	
		if (isset($parameters['filename'])) {
			$this->setFilename($parameters['filename']);
		}
	
		if (isset($parameters['statusId'])) {
			$this->setStatusId($parameters['statusId']);
		}
	
		if (isset($parameters['metadata'])) {
			$this->setMetadata($parameters['metadata']);
		}
	
		if (isset($parameters['mimetype'])) {
			$this->setMimetype($parameters['mimetype']);
		}
	
		if (isset($parameters['parentId'])) {
			$this->setParentId($parameters['parentId']);
		}
	
		if (isset($parameters['replacedBy'])) {
			$this->setReplacedBy($parameters['replacedBy']);
		}
	
		if (isset($parameters['size'])) {
			$this->setSize($parameters['size']);
		}
	
		if (isset($parameters['uploaded'])) {
			$this->setUploaded($parameters['uploaded']);
		}
	
		if (isset($parameters['uploadedBy'])) {
			$this->setUploadedBy($parameters['uploadedBy']);
		}
	
		if (isset($parameters['deployedFiles'])) {
			$this->setDeployedFiles($parameters['deployedFiles']);
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
	 * Gets the mediaId of the Media
	 * @return int
	 */
	public function getMediaId() {
		return $this->mediaId;
	}

	/**
	 * Gets the categoryId of the Media
	 * @return int
	 */
	public function getCategoryId() {
		return $this->categoryId;
	}

	/**
	 * Gets the extension of the Media
	 * @return string
	 */
	public function getExtension() {
		return $this->extension;
	}

	/**
	 * Gets the filename of the Media
	 * @return string
	 */
	public function getFilename() {
		return $this->filename;
	}

	/**
	 * Gets the statusId of the Media
	 * @return int
	 */
	public function getStatusId() {
		return $this->statusId;
	}

	/**
	 * Gets the metadata of the Media
	 * @return MetaData[]
	 */
	public function getMetadata() {
		return $this->metadata;
	}

	/**
	 * Gets the mimetype of the Media
	 * @return MimeType
	 */
	public function getMimetype() {
		return $this->mimetype;
	}

	/**
	 * Gets the parentId of the Media
	 * @return int
	 */
	public function getParentId() {
		return $this->parentId;
	}

	/**
	 * Gets the replacedBy of the Media
	 * @return int
	 */
	public function getReplacedBy() {
		return $this->replacedBy;
	}

	/**
	 * Gets the size of the Media
	 * @return int
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * Gets the uploaded of the Media
	 * @return string
	 */
	public function getUploaded() {
		return $this->uploaded;
	}

	/**
	 * Gets the uploadedBy of the Media
	 * @return int
	 */
	public function getUploadedBy() {
		return $this->uploadedBy;
	}

	/**
	 * Gets the deployedFiles of the Media
	 * @return DeploymentFile[]
	 */
	public function getDeployedFiles() {
		return $this->deployedFiles;
	}

	/**
	 * Gets the objectId of the Media
	 * @return int
	 */
	public function getObjectId() {
		return $this->objectId;
	}

	/**
	 * Gets the name of the Media
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the created of the Media
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the Media
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the Media
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the Media
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the deleted of the Media
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
	 * Gets the propertySets of the Media
	 * @return PropertySet[]
	 */
	public function getPropertySets() {
		return $this->propertySets;
	}

	/**
	 * Gets the dirty of the Media
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the typeId of the Media
	 * @return int
	 */
	public function getTypeId() {
		return $this->typeId;
	}

	/**
	 * Gets a DeployedFile
	 * @param int $templateId The id of the template to get.
	 * @param string $templateType The type of template.
	 * @param int $siteId The DeploymentSite id to get the template for. If not supplied, first available will be used.
	 * @throws QBankApiException Thrown if the requested deployed file does not exist.
	 * @return DeploymentFile
	 */
	public function getDeployedFile($templateId, $templateType = self::TEMPLATE_IMAGE, $siteId = null) {
		foreach ($this->deployedFiles as $deployedFile) {
			if (($templateType == self::TEMPLATE_IMAGE && $templateId == $deployedFile->getImageTemplateId()) ||
				($templateType == self::TEMPLATE_VIDEO && $templateId == $deployedFile->getVideoTemplateId())) {
				if ($siteId === null || $siteId == $deployedFile->getDeployMentSiteId()) {
					return $deployedFile;
				}
			}
		}
		throw new QBankApiException('No DeploymentFile with the id "'.$templateId.'" exists.');
	}


	/**
	 * Sets the "mediaId" of the Media
	 * @param int $mediaId
	 * @return $this
	 */
	protected function setMediaId($mediaId) {
		$this->mediaId = $mediaId;
		return $this;
	}

	/**
	 * Sets the "categoryId" of the Media
	 * @param int $categoryId
	 * @return $this
	 */
	protected function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
		return $this;
	}

	/**
	 * Sets the "extension" of the Media
	 * @param string $extension
	 * @return $this
	 */
	protected function setExtension($extension) {
		$this->extension = $extension;
		return $this;
	}

	/**
	 * Sets the "filename" of the Media
	 * @param string $filename
	 * @return $this
	 */
	protected function setFilename($filename) {
		$this->filename = $filename;
		return $this;
	}

	/**
	 * Sets the "statusId" of the Media
	 * @param int $statusId
	 * @return $this
	 */
	protected function setStatusId($statusId) {
		$this->statusId = $statusId;
		return $this;
	}

	/**
	 * Sets the "metadata" of the Media
	 * @param MetaData[] $metadata
	 * @return $this
	 */
	protected function setMetadata($metadata) {
		if (is_array($metadata)) {
			$this->metadata = array();
			foreach ($metadata as $item) {
				if (!($item instanceof MetaData)) {
					if (is_array($item)) {
						try {
							$item = new MetaData($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate MetaData. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "MetaData"!', E_USER_WARNING);
						continue;
					}
				}
				$this->metadata[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "mimetype" of the Media
	 * @param MimeType $mimetype
	 * @return $this
	 */
	protected function setMimetype($mimetype) {
		if ($mimetype instanceof MimeType) {
			$this->mimetype = $mimetype;
		} else if (is_array($mimetype)) {
			$this->mimetype = new MimeType($mimetype);
		} else {
			$this->mimetype = null;
			trigger_error('Argument must be an object of class MimeType. Data loss!', E_USER_WARNING);
		}
		return $this;
	}

	/**
	 * Sets the "parentId" of the Media
	 * @param int $parentId
	 * @return $this
	 */
	protected function setParentId($parentId) {
		$this->parentId = $parentId;
		return $this;
	}

	/**
	 * Sets the "replacedBy" of the Media
	 * @param int $replacedBy
	 * @return $this
	 */
	protected function setReplacedBy($replacedBy) {
		$this->replacedBy = $replacedBy;
		return $this;
	}

	/**
	 * Sets the "size" of the Media
	 * @param int $size
	 * @return $this
	 */
	protected function setSize($size) {
		$this->size = $size;
		return $this;
	}

	/**
	 * Sets the "uploaded" of the Media
	 * @param string $uploaded
	 * @return $this
	 */
	protected function setUploaded($uploaded) {
		$this->uploaded = $uploaded;
		return $this;
	}

	/**
	 * Sets the "uploadedBy" of the Media
	 * @param int $uploadedBy
	 * @return $this
	 */
	protected function setUploadedBy($uploadedBy) {
		$this->uploadedBy = $uploadedBy;
		return $this;
	}

	/**
	 * Sets the "deployedFiles" of the Media
	 * @param DeploymentFile[] $deployedFiles
	 * @return $this
	 */
	protected function setDeployedFiles($deployedFiles) {
		if (is_array($deployedFiles)) {
			$this->deployedFiles = array();
			foreach ($deployedFiles as $item) {
				if (!($item instanceof DeploymentFile)) {
					if (is_array($item)) {
						try {
							$item = new DeploymentFile($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate DeploymentFile. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "DeploymentFile"!', E_USER_WARNING);
						continue;
					}
				}
				$this->deployedFiles[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "objectId" of the Media
	 * @param int $objectId
	 * @return $this
	 */
	protected function setObjectId($objectId) {
		$this->objectId = $objectId;
		return $this;
	}

	/**
	 * Sets the "name" of the Media
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "created" of the Media
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
	 * Sets the "createdBy" of the Media
	 * @param int $createdBy
	 * @return $this
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the Media
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
	 * Sets the "updatedBy" of the Media
	 * @param int $updatedBy
	 * @return $this
	 */
	protected function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "deleted" of the Media
	 * @param boolean $deleted
	 * @return $this
	 */
	protected function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "propertySets" of the Media
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
	 * Sets the "dirty" of the Media
	 * @param boolean $dirty
	 * @return $this
	 */
	protected function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "typeId" of the Media
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
		
		if ($this->mediaId !== null) {
			$array['mediaId'] = $this->mediaId;
		}
		if ($this->categoryId !== null) {
			$array['categoryId'] = $this->categoryId;
		}
		if ($this->extension !== null) {
			$array['extension'] = $this->extension;
		}
		if ($this->filename !== null) {
			$array['filename'] = $this->filename;
		}
		if ($this->statusId !== null) {
			$array['statusId'] = $this->statusId;
		}
		if ($this->metadata !== null) {
			$array['metadata'] = $this->metadata;
		}
		if ($this->mimetype !== null) {
			$array['mimetype'] = $this->mimetype;
		}
		if ($this->parentId !== null) {
			$array['parentId'] = $this->parentId;
		}
		if ($this->replacedBy !== null) {
			$array['replacedBy'] = $this->replacedBy;
		}
		if ($this->size !== null) {
			$array['size'] = $this->size;
		}
		if ($this->uploaded !== null) {
			$array['uploaded'] = $this->uploaded;
		}
		if ($this->uploadedBy !== null) {
			$array['uploadedBy'] = $this->uploadedBy;
		}
		if ($this->deployedFiles !== null) {
			$array['deployedFiles'] = $this->deployedFiles;
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