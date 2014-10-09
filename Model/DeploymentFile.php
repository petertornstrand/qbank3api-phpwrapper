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

class DeploymentFile implements \JsonSerializable  {



	/**
	 * The identifier of the DeploymentSite this file is deployed to.
	 * @var int
	 */
	protected $deploymentSiteId;

	/**
	 * The filename of the deployed file.
	 * @var string
	 */
	protected $remoteFile;

	/**
	 * The identifier of the Image template used.
	 * @var int
	 */
	protected $imageTemplateId;

	/**
	 * The identifier of the Video template used.
	 * @var int
	 */
	protected $videoTemplateId;

	/**
	 * The time of deployment for this file.
	 * @var DateTime
	 */
	protected $created;

	/**
	 * The original filename of the file when uploaded to QBank.
	 * @var string
	 */
	protected $filename;

	/**
	 * The size of the file on disk
	 * @var int
	 */
	protected $filesize;

	/**
	 * Metadata associated with the deployed media
	 * @var Object
	 */
	protected $metadata;


	/**
	 * Constructs a {@link DeploymentFile }.
	 * @param array $parameters An array of parameters to initialize the {@link DeploymentFile } with.
	 * - <b>deploymentSiteId</b> - The identifier of the DeploymentSite this file is deployed to.
	 * - <b>remoteFile</b> - The filename of the deployed file.
	 * - <b>imageTemplateId</b> - The identifier of the Image template used.
	 * - <b>videoTemplateId</b> - The identifier of the Video template used.
	 * - <b>created</b> - The time of deployment for this file.
	 * - <b>filename</b> - The original filename of the file when uploaded to QBank.
	 * - <b>filesize</b> - The size of the file on disk
	 * - <b>metadata</b> - Metadata associated with the deployed media
	 * 
	 */
	public function __construct($parameters) {
		
		
		
		if (isset($parameters['deploymentSiteId'])) {
			$this->setDeploymentSiteId($parameters['deploymentSiteId']);
		}
	
		if (isset($parameters['remoteFile'])) {
			$this->setRemoteFile($parameters['remoteFile']);
		}
	
		if (isset($parameters['imageTemplateId'])) {
			$this->setImageTemplateId($parameters['imageTemplateId']);
		}
	
		if (isset($parameters['videoTemplateId'])) {
			$this->setVideoTemplateId($parameters['videoTemplateId']);
		}
	
		if (isset($parameters['created'])) {
			$this->setCreated($parameters['created']);
		}
	
		if (isset($parameters['filename'])) {
			$this->setFilename($parameters['filename']);
		}
	
		if (isset($parameters['filesize'])) {
			$this->setFilesize($parameters['filesize']);
		}
	
		if (isset($parameters['metadata'])) {
			$this->setMetadata($parameters['metadata']);
		}
	
	}


	/**
	 * Gets the deploymentSiteId of the DeploymentFile
	 * @return int
	 */
	public function getDeploymentSiteId() {
		return $this->deploymentSiteId;
	}

	/**
	 * Gets the remoteFile of the DeploymentFile
	 * @return string
	 */
	public function getRemoteFile() {
		return $this->remoteFile;
	}

	/**
	 * Gets the imageTemplateId of the DeploymentFile
	 * @return int
	 */
	public function getImageTemplateId() {
		return $this->imageTemplateId;
	}

	/**
	 * Gets the videoTemplateId of the DeploymentFile
	 * @return int
	 */
	public function getVideoTemplateId() {
		return $this->videoTemplateId;
	}

	/**
	 * Gets the created of the DeploymentFile
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the filename of the DeploymentFile
	 * @return string
	 */
	public function getFilename() {
		return $this->filename;
	}

	/**
	 * Gets the filesize of the DeploymentFile
	 * @return int
	 */
	public function getFilesize() {
		return $this->filesize;
	}

	/**
	 * Gets the metadata of the DeploymentFile
	 * @return Object
	 */
	public function getMetadata() {
		return $this->metadata;
	}



	/**
	 * Sets the "deploymentSiteId" of the DeploymentFile
	 * @param int $deploymentSiteId
	 * @return $this
	 */
	protected function setDeploymentSiteId($deploymentSiteId) {
		$this->deploymentSiteId = $deploymentSiteId;
		return $this;
	}

	/**
	 * Sets the "remoteFile" of the DeploymentFile
	 * @param string $remoteFile
	 * @return $this
	 */
	protected function setRemoteFile($remoteFile) {
		$this->remoteFile = $remoteFile;
		return $this;
	}

	/**
	 * Sets the "imageTemplateId" of the DeploymentFile
	 * @param int $imageTemplateId
	 * @return $this
	 */
	protected function setImageTemplateId($imageTemplateId) {
		$this->imageTemplateId = $imageTemplateId;
		return $this;
	}

	/**
	 * Sets the "videoTemplateId" of the DeploymentFile
	 * @param int $videoTemplateId
	 * @return $this
	 */
	protected function setVideoTemplateId($videoTemplateId) {
		$this->videoTemplateId = $videoTemplateId;
		return $this;
	}

	/**
	 * Sets the "created" of the DeploymentFile
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
	 * Sets the "filename" of the DeploymentFile
	 * @param string $filename
	 * @return $this
	 */
	protected function setFilename($filename) {
		$this->filename = $filename;
		return $this;
	}

	/**
	 * Sets the "filesize" of the DeploymentFile
	 * @param int $filesize
	 * @return $this
	 */
	protected function setFilesize($filesize) {
		$this->filesize = $filesize;
		return $this;
	}

	/**
	 * Sets the "metadata" of the DeploymentFile
	 * @param Object $metadata
	 * @return $this
	 */
	protected function setMetadata($metadata) {
		$this->metadata = $metadata;
		return $this;
	}


	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->deploymentSiteId !== null) {
			$array['deploymentSiteId'] = $this->deploymentSiteId;
		}
		if ($this->remoteFile !== null) {
			$array['remoteFile'] = $this->remoteFile;
		}
		if ($this->imageTemplateId !== null) {
			$array['imageTemplateId'] = $this->imageTemplateId;
		}
		if ($this->videoTemplateId !== null) {
			$array['videoTemplateId'] = $this->videoTemplateId;
		}
		if ($this->created !== null) {
			$array['created'] = $this->created;
		}
		if ($this->filename !== null) {
			$array['filename'] = $this->filename;
		}
		if ($this->filesize !== null) {
			$array['filesize'] = $this->filesize;
		}
		if ($this->metadata !== null) {
			$array['metadata'] = $this->metadata;
		}
		return $array;
	}
}