<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class DownloadItem implements \JsonSerializable  {



	/**
	 * Media ID
	 * @var int
	 */
	protected $mediaId;

	/**
	 * ImageTemplate ID
	 * @var int
	 */
	protected $imageTemplateId;


	/**
	 * Constructs a {@link DownloadItem }.
	 * @param array $parameters An array of parameters to initialize the {@link DownloadItem } with.
	 * - <b>mediaId</b> - Media ID
	 * - <b>imageTemplateId</b> - ImageTemplate ID
	 * 
	 */
	public function __construct($parameters) {
		
		
		
		if (isset($parameters['mediaId'])) {
			$this->setMediaId($parameters['mediaId']);
		}
	
		if (isset($parameters['imageTemplateId'])) {
			$this->setImageTemplateId($parameters['imageTemplateId']);
		}
	
	}


	/**
	 * Gets the mediaId of the DownloadItem
	 * @return int
	 */
	public function getMediaId() {
		return $this->mediaId;
	}

	/**
	 * Gets the imageTemplateId of the DownloadItem
	 * @return int
	 */
	public function getImageTemplateId() {
		return $this->imageTemplateId;
	}



	/**
	 * Sets the "mediaId" of the DownloadItem
	 * @param int $mediaId
	 * @return $this
	 */
	public function setMediaId($mediaId) {
		$this->mediaId = $mediaId;
		return $this;
	}

	/**
	 * Sets the "imageTemplateId" of the DownloadItem
	 * @param int $imageTemplateId
	 * @return $this
	 */
	public function setImageTemplateId($imageTemplateId) {
		$this->imageTemplateId = $imageTemplateId;
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
		if ($this->imageTemplateId !== null) {
			$array['imageTemplateId'] = $this->imageTemplateId;
		}
		return $array;
	}
}