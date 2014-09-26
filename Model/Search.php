<?php

namespace QBNK\QBank\API\Model;

use \DateTime;


/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Search implements \JsonSerializable  {



	/**
	 * Starting offset of the search
	 * @var int
	 */
	protected $offset;

	/**
	 * The number of results to return
	 * @var int
	 */
	protected $limit;

	/**
	 * A freetext string to search for, operators like and/or/not and grouping by parentheses is available
	 * @var string
	 */
	protected $freeText;

	/**
	 * An array with ObjectIds to filter by
	 * @var Array
	 */
	protected $objectIds;

	/**
	 * An array with MediaIds to filter by
	 * @var Array
	 */
	protected $mediaIds;

	/**
	 * Filter by creators of Media
	 * @var Array
	 */
	protected $createdByIds;

	/**
	 * Filter by created date
	 * @var DateTimeRange
	 */
	protected $createdRange;

	/**
	 * Filter by updaters of Media
	 * @var Array
	 */
	protected $updatedByIds;

	/**
	 * Filter by updated date
	 * @var DateTimeRange
	 */
	protected $updatedRange;

	/**
	 * An array with MediaStatuses to filter by
	 * @var Array
	 */
	protected $mediaStatusIds;

	/**
	 * An array with FolderIds to search within
	 * @var Array
	 */
	protected $folderIds;

	/**
	 * An array with MoodboardIds to search within
	 * @var Array
	 */
	protected $moodboardIds;

	/**
	 * An array with CategoryIds to search within
	 * @var Array
	 */
	protected $categoryIds;

	/**
	 * An array with DeploymentSiteIds to search within
	 * @var Array
	 */
	protected $deploymentSiteIds;

	/**
	 * An array of Properties to filter by
	 * @var Array
	 */
	protected $properties;

	/**
	 * Filter by file size
	 * @var IntRange
	 */
	protected $fileSizeRange;

	/**
	 * Filter by mime type, uses normal LIKE database syntax, for example image/% will return all images, video/% all videos.
	 * @var string
	 */
	protected $mimeType;

	/**
	 * Filter by file name, uses normal LIKE database syntax
	 * @var string
	 */
	protected $fileName;

	/**
	 * Filter by deployment date
	 * @var DateTimeRange
	 */
	protected $deploymentDateRange;


	/**
	 * Constructs a {@link Search }.
	 * @param array $parameters An array of parameters to initialize the {@link Search } with.
	 * - <b>offset</b> - Starting offset of the search
	 * - <b>limit</b> - The number of results to return
	 * - <b>freeText</b> - A freetext string to search for, operators like and/or/not and grouping by parentheses is available
	 * - <b>objectIds</b> - An array with ObjectIds to filter by
	 * - <b>mediaIds</b> - An array with MediaIds to filter by
	 * - <b>createdByIds</b> - Filter by creators of Media
	 * - <b>createdRange</b> - Filter by created date
	 * - <b>updatedByIds</b> - Filter by updaters of Media
	 * - <b>updatedRange</b> - Filter by updated date
	 * - <b>mediaStatusIds</b> - An array with MediaStatuses to filter by
	 * - <b>folderIds</b> - An array with FolderIds to search within
	 * - <b>moodboardIds</b> - An array with MoodboardIds to search within
	 * - <b>categoryIds</b> - An array with CategoryIds to search within
	 * - <b>deploymentSiteIds</b> - An array with DeploymentSiteIds to search within
	 * - <b>properties</b> - An array of Properties to filter by
	 * - <b>fileSizeRange</b> - Filter by file size
	 * - <b>mimeType</b> - Filter by mime type, uses normal LIKE database syntax, for example image/% will return all images, video/% all videos.
	 * - <b>fileName</b> - Filter by file name, uses normal LIKE database syntax
	 * - <b>deploymentDateRange</b> - Filter by deployment date
	 * 
	 */
	public function __construct($parameters) {
		$this->offset = 0;
		$this->limit = 50;
		$this->mediaStatusIds = array(4);
		
		
		if (isset($parameters['offset'])) {
			$this->setOffset($parameters['offset']);
		}
	
		if (isset($parameters['limit'])) {
			$this->setLimit($parameters['limit']);
		}
	
		if (isset($parameters['freeText'])) {
			$this->setFreeText($parameters['freeText']);
		}
	
		if (isset($parameters['objectIds'])) {
			$this->setObjectIds($parameters['objectIds']);
		}
	
		if (isset($parameters['mediaIds'])) {
			$this->setMediaIds($parameters['mediaIds']);
		}
	
		if (isset($parameters['createdByIds'])) {
			$this->setCreatedByIds($parameters['createdByIds']);
		}
	
		if (isset($parameters['createdRange'])) {
			$this->setCreatedRange($parameters['createdRange']);
		}
	
		if (isset($parameters['updatedByIds'])) {
			$this->setUpdatedByIds($parameters['updatedByIds']);
		}
	
		if (isset($parameters['updatedRange'])) {
			$this->setUpdatedRange($parameters['updatedRange']);
		}
	
		if (isset($parameters['mediaStatusIds'])) {
			$this->setMediaStatusIds($parameters['mediaStatusIds']);
		}
	
		if (isset($parameters['folderIds'])) {
			$this->setFolderIds($parameters['folderIds']);
		}
	
		if (isset($parameters['moodboardIds'])) {
			$this->setMoodboardIds($parameters['moodboardIds']);
		}
	
		if (isset($parameters['categoryIds'])) {
			$this->setCategoryIds($parameters['categoryIds']);
		}
	
		if (isset($parameters['deploymentSiteIds'])) {
			$this->setDeploymentSiteIds($parameters['deploymentSiteIds']);
		}
	
		if (isset($parameters['properties'])) {
			$this->setProperties($parameters['properties']);
		}
	
		if (isset($parameters['fileSizeRange'])) {
			$this->setFileSizeRange($parameters['fileSizeRange']);
		}
	
		if (isset($parameters['mimeType'])) {
			$this->setMimeType($parameters['mimeType']);
		}
	
		if (isset($parameters['fileName'])) {
			$this->setFileName($parameters['fileName']);
		}
	
		if (isset($parameters['deploymentDateRange'])) {
			$this->setDeploymentDateRange($parameters['deploymentDateRange']);
		}
	
	}


	/**
	 * Gets the offset of the Search
	 * @return int
	 */
	public function getOffset() {
		return $this->offset;
	}

	/**
	 * Gets the limit of the Search
	 * @return int
	 */
	public function getLimit() {
		return $this->limit;
	}

	/**
	 * Gets the freeText of the Search
	 * @return string
	 */
	public function getFreeText() {
		return $this->freeText;
	}

	/**
	 * Gets the objectIds of the Search
	 * @return Array
	 */
	public function getObjectIds() {
		return $this->objectIds;
	}

	/**
	 * Gets the mediaIds of the Search
	 * @return Array
	 */
	public function getMediaIds() {
		return $this->mediaIds;
	}

	/**
	 * Gets the createdByIds of the Search
	 * @return Array
	 */
	public function getCreatedByIds() {
		return $this->createdByIds;
	}

	/**
	 * Gets the createdRange of the Search
	 * @return DateTimeRange
	 */
	public function getCreatedRange() {
		return $this->createdRange;
	}

	/**
	 * Gets the updatedByIds of the Search
	 * @return Array
	 */
	public function getUpdatedByIds() {
		return $this->updatedByIds;
	}

	/**
	 * Gets the updatedRange of the Search
	 * @return DateTimeRange
	 */
	public function getUpdatedRange() {
		return $this->updatedRange;
	}

	/**
	 * Gets the mediaStatusIds of the Search
	 * @return Array
	 */
	public function getMediaStatusIds() {
		return $this->mediaStatusIds;
	}

	/**
	 * Gets the folderIds of the Search
	 * @return Array
	 */
	public function getFolderIds() {
		return $this->folderIds;
	}

	/**
	 * Gets the moodboardIds of the Search
	 * @return Array
	 */
	public function getMoodboardIds() {
		return $this->moodboardIds;
	}

	/**
	 * Gets the categoryIds of the Search
	 * @return Array
	 */
	public function getCategoryIds() {
		return $this->categoryIds;
	}

	/**
	 * Gets the deploymentSiteIds of the Search
	 * @return Array
	 */
	public function getDeploymentSiteIds() {
		return $this->deploymentSiteIds;
	}

	/**
	 * Gets the properties of the Search
	 * @return Array
	 */
	public function getProperties() {
		return $this->properties;
	}

	/**
	 * Gets the fileSizeRange of the Search
	 * @return IntRange
	 */
	public function getFileSizeRange() {
		return $this->fileSizeRange;
	}

	/**
	 * Gets the mimeType of the Search
	 * @return string
	 */
	public function getMimeType() {
		return $this->mimeType;
	}

	/**
	 * Gets the fileName of the Search
	 * @return string
	 */
	public function getFileName() {
		return $this->fileName;
	}

	/**
	 * Gets the deploymentDateRange of the Search
	 * @return DateTimeRange
	 */
	public function getDeploymentDateRange() {
		return $this->deploymentDateRange;
	}



	/**
	 * Sets the "offset" of the Search
	 * @param int $offset
	 * @return $this
	 */
	public function setOffset($offset) {
		$this->offset = $offset;
		return $this;
	}

	/**
	 * Sets the "limit" of the Search
	 * @param int $limit
	 * @return $this
	 */
	public function setLimit($limit) {
		$this->limit = $limit;
		return $this;
	}

	/**
	 * Sets the "freeText" of the Search
	 * @param string $freeText
	 * @return $this
	 */
	public function setFreeText($freeText) {
		$this->freeText = $freeText;
		return $this;
	}

	/**
	 * Sets the "objectIds" of the Search
	 * @param int[] $objectIds
	 * @return $this
	 */
	public function setObjectIds($objectIds) {
		if (is_array($objectIds)) {
			$this->objectIds = array();
			foreach ($objectIds as $item) {
				$this->objectIds[] = (int) $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "mediaIds" of the Search
	 * @param int[] $mediaIds
	 * @return $this
	 */
	public function setMediaIds($mediaIds) {
		if (is_array($mediaIds)) {
			$this->mediaIds = array();
			foreach ($mediaIds as $item) {
				$this->mediaIds[] = (int) $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "createdByIds" of the Search
	 * @param int[] $createdByIds
	 * @return $this
	 */
	public function setCreatedByIds($createdByIds) {
		if (is_array($createdByIds)) {
			$this->createdByIds = array();
			foreach ($createdByIds as $item) {
				$this->createdByIds[] = (int) $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "createdRange" of the Search
	 * @param DateTimeRange $createdRange
	 * @return $this
	 */
	public function setCreatedRange($createdRange) {
		if ($createdRange instanceof DateTimeRange) {
			$this->createdRange = $createdRange;
		} else if (is_array($createdRange)) {
			$this->createdRange = new DateTimeRange($createdRange);
		} else {
			$this->createdRange = null;
			trigger_error('Argument must be an object of class DateTimeRange. Data loss!', E_USER_WARNING);
		}
		return $this;
	}

	/**
	 * Sets the "updatedByIds" of the Search
	 * @param int[] $updatedByIds
	 * @return $this
	 */
	public function setUpdatedByIds($updatedByIds) {
		if (is_array($updatedByIds)) {
			$this->updatedByIds = array();
			foreach ($updatedByIds as $item) {
				$this->updatedByIds[] = (int) $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "updatedRange" of the Search
	 * @param DateTimeRange $updatedRange
	 * @return $this
	 */
	public function setUpdatedRange($updatedRange) {
		if ($updatedRange instanceof DateTimeRange) {
			$this->updatedRange = $updatedRange;
		} else if (is_array($updatedRange)) {
			$this->updatedRange = new DateTimeRange($updatedRange);
		} else {
			$this->updatedRange = null;
			trigger_error('Argument must be an object of class DateTimeRange. Data loss!', E_USER_WARNING);
		}
		return $this;
	}

	/**
	 * Sets the "mediaStatusIds" of the Search
	 * @param int[] $mediaStatusIds
	 * @return $this
	 */
	public function setMediaStatusIds($mediaStatusIds) {
		if (is_array($mediaStatusIds)) {
			$this->mediaStatusIds = array();
			foreach ($mediaStatusIds as $item) {
				$this->mediaStatusIds[] = (int) $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "folderIds" of the Search
	 * @param int[] $folderIds
	 * @return $this
	 */
	public function setFolderIds($folderIds) {
		if (is_array($folderIds)) {
			$this->folderIds = array();
			foreach ($folderIds as $item) {
				$this->folderIds[] = (int) $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "moodboardIds" of the Search
	 * @param int[] $moodboardIds
	 * @return $this
	 */
	public function setMoodboardIds($moodboardIds) {
		if (is_array($moodboardIds)) {
			$this->moodboardIds = array();
			foreach ($moodboardIds as $item) {
				$this->moodboardIds[] = (int) $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "categoryIds" of the Search
	 * @param int[] $categoryIds
	 * @return $this
	 */
	public function setCategoryIds($categoryIds) {
		if (is_array($categoryIds)) {
			$this->categoryIds = array();
			foreach ($categoryIds as $item) {
				$this->categoryIds[] = (int) $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "deploymentSiteIds" of the Search
	 * @param int[] $deploymentSiteIds
	 * @return $this
	 */
	public function setDeploymentSiteIds($deploymentSiteIds) {
		if (is_array($deploymentSiteIds)) {
			$this->deploymentSiteIds = array();
			foreach ($deploymentSiteIds as $item) {
				$this->deploymentSiteIds[] = (int) $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "properties" of the Search
	 * @param PropertyCriteria[] $properties
	 * @return $this
	 */
	public function setProperties($properties) {
		if (is_array($properties)) {
			$this->properties = array();
			foreach ($properties as $item) {
				if (!($item instanceof PropertyCriteria)) {
					trigger_error('Array parameter item is not of expected type "PropertyCriteria"!', E_USER_WARNING);
					continue;
				}
				$this->properties[] = new PropertyCriteria($item);
			}
		}
		return $this;
	}

	/**
	 * Sets the "fileSizeRange" of the Search
	 * @param IntRange $fileSizeRange
	 * @return $this
	 */
	public function setFileSizeRange($fileSizeRange) {
		if ($fileSizeRange instanceof IntRange) {
			$this->fileSizeRange = $fileSizeRange;
		} else if (is_array($fileSizeRange)) {
			$this->fileSizeRange = new IntRange($fileSizeRange);
		} else {
			$this->fileSizeRange = null;
			trigger_error('Argument must be an object of class IntRange. Data loss!', E_USER_WARNING);
		}
		return $this;
	}

	/**
	 * Sets the "mimeType" of the Search
	 * @param string $mimeType
	 * @return $this
	 */
	public function setMimeType($mimeType) {
		$this->mimeType = $mimeType;
		return $this;
	}

	/**
	 * Sets the "fileName" of the Search
	 * @param string $fileName
	 * @return $this
	 */
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		return $this;
	}

	/**
	 * Sets the "deploymentDateRange" of the Search
	 * @param DateTimeRange $deploymentDateRange
	 * @return $this
	 */
	public function setDeploymentDateRange($deploymentDateRange) {
		if ($deploymentDateRange instanceof DateTimeRange) {
			$this->deploymentDateRange = $deploymentDateRange;
		} else if (is_array($deploymentDateRange)) {
			$this->deploymentDateRange = new DateTimeRange($deploymentDateRange);
		} else {
			$this->deploymentDateRange = null;
			trigger_error('Argument must be an object of class DateTimeRange. Data loss!', E_USER_WARNING);
		}
		return $this;
	}


	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->offset !== null) {
			$array['offset'] = $this->offset;
		}
		if ($this->limit !== null) {
			$array['limit'] = $this->limit;
		}
		if ($this->freeText !== null) {
			$array['freeText'] = $this->freeText;
		}
		if ($this->objectIds !== null) {
			$array['objectIds'] = $this->objectIds;
		}
		if ($this->mediaIds !== null) {
			$array['mediaIds'] = $this->mediaIds;
		}
		if ($this->createdByIds !== null) {
			$array['createdByIds'] = $this->createdByIds;
		}
		if ($this->createdRange !== null) {
			$array['createdRange'] = $this->createdRange;
		}
		if ($this->updatedByIds !== null) {
			$array['updatedByIds'] = $this->updatedByIds;
		}
		if ($this->updatedRange !== null) {
			$array['updatedRange'] = $this->updatedRange;
		}
		if ($this->mediaStatusIds !== null) {
			$array['mediaStatusIds'] = $this->mediaStatusIds;
		}
		if ($this->folderIds !== null) {
			$array['folderIds'] = $this->folderIds;
		}
		if ($this->moodboardIds !== null) {
			$array['moodboardIds'] = $this->moodboardIds;
		}
		if ($this->categoryIds !== null) {
			$array['categoryIds'] = $this->categoryIds;
		}
		if ($this->deploymentSiteIds !== null) {
			$array['deploymentSiteIds'] = $this->deploymentSiteIds;
		}
		if ($this->properties !== null) {
			$array['properties'] = $this->properties;
		}
		if ($this->fileSizeRange !== null) {
			$array['fileSizeRange'] = $this->fileSizeRange;
		}
		if ($this->mimeType !== null) {
			$array['mimeType'] = $this->mimeType;
		}
		if ($this->fileName !== null) {
			$array['fileName'] = $this->fileName;
		}
		if ($this->deploymentDateRange !== null) {
			$array['deploymentDateRange'] = $this->deploymentDateRange;
		}
		return $array;
	}
}