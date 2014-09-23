<?php

namespace QBNK\QBank\API\Model;



/**
 * The MimeType human readable description.
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class MimeType implements \JsonSerializable  {



	/**
	 * The MimeType identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * The MimeType string representation.
	 * @var string
	 */
	protected $mimetype;

	/**
	 * The MimeType human readable description.
	 * @var string
	 */
	protected $description;

	/**
	 * Whether the MimeType is usable in an ImageTemplate.
	 * @var boolean
	 */
	protected $imagetemplate;

	/**
	 * Whether the MimeType is usable in a VideoTemplate.
	 * @var boolean
	 */
	protected $videotemplate;

	/**
	 * The default file extension of the MimeType.
	 * @var string
	 */
	protected $defaultextension;

	/**
	 * The MimeType class. Eg. image, video, document.
	 * @var string
	 */
	protected $classification;


	/**
	 * Constructs a {@link MimeType }.
	 * @param array $parameters An array of parameters to initialize the {@link MimeType } with.
	 * - <b>id</b> - The MimeType identifier.
	 * - <b>mimetype</b> - The MimeType string representation.
	 * - <b>description</b> - The MimeType human readable description.
	 * - <b>imagetemplate</b> - Whether the MimeType is usable in an ImageTemplate.
	 * - <b>videotemplate</b> - Whether the MimeType is usable in a VideoTemplate.
	 * - <b>defaultextension</b> - The default file extension of the MimeType.
	 * - <b>classification</b> - The MimeType class. Eg. image, video, document.
	 * 
	 */
	public function __construct($parameters) {
		
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['mimetype'])) {
			$this->setMimetype($parameters['mimetype']);
		}
	
		if (isset($parameters['description'])) {
			$this->setDescription($parameters['description']);
		}
	
		if (isset($parameters['imagetemplate'])) {
			$this->setImagetemplate($parameters['imagetemplate']);
		}
	
		if (isset($parameters['videotemplate'])) {
			$this->setVideotemplate($parameters['videotemplate']);
		}
	
		if (isset($parameters['defaultextension'])) {
			$this->setDefaultextension($parameters['defaultextension']);
		}
	
		if (isset($parameters['classification'])) {
			$this->setClassification($parameters['classification']);
		}
	
	}


	/**
	 * Gets the id of the MimeType
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the mimetype of the MimeType
	 * @return string
	 */
	public function getMimetype() {
		return $this->mimetype;
	}

	/**
	 * Gets the description of the MimeType
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Gets the imagetemplate of the MimeType
	 * @return boolean
	 */
	public function getImagetemplate() {
		return $this->imagetemplate;
	}

	/**
	 * Gets the videotemplate of the MimeType
	 * @return boolean
	 */
	public function getVideotemplate() {
		return $this->videotemplate;
	}

	/**
	 * Gets the defaultextension of the MimeType
	 * @return string
	 */
	public function getDefaultextension() {
		return $this->defaultextension;
	}

	/**
	 * Gets the classification of the MimeType
	 * @return string
	 */
	public function getClassification() {
		return $this->classification;
	}



	/**
	 * Sets the "id" of the MimeType
	 * @param int $id
	 * @return $this
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "mimetype" of the MimeType
	 * @param string $mimetype
	 * @return $this
	 */
	public function setMimetype($mimetype) {
		$this->mimetype = $mimetype;
		return $this;
	}

	/**
	 * Sets the "description" of the MimeType
	 * @param string $description
	 * @return $this
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Sets the "imagetemplate" of the MimeType
	 * @param boolean $imagetemplate
	 * @return $this
	 */
	public function setImagetemplate($imagetemplate) {
		$this->imagetemplate = (bool)$imagetemplate;
		return $this;
	}

	/**
	 * Sets the "videotemplate" of the MimeType
	 * @param boolean $videotemplate
	 * @return $this
	 */
	public function setVideotemplate($videotemplate) {
		$this->videotemplate = (bool)$videotemplate;
		return $this;
	}

	/**
	 * Sets the "defaultextension" of the MimeType
	 * @param string $defaultextension
	 * @return $this
	 */
	public function setDefaultextension($defaultextension) {
		$this->defaultextension = $defaultextension;
		return $this;
	}

	/**
	 * Sets the "classification" of the MimeType
	 * @param string $classification
	 * @return $this
	 */
	public function setClassification($classification) {
		$this->classification = $classification;
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
		if ($this->mimetype !== null) {
			$array['mimetype'] = $this->mimetype;
		}
		if ($this->description !== null) {
			$array['description'] = $this->description;
		}
		if ($this->imagetemplate !== null) {
			$array['imagetemplate'] = $this->imagetemplate;
		}
		if ($this->videotemplate !== null) {
			$array['videotemplate'] = $this->videotemplate;
		}
		if ($this->defaultextension !== null) {
			$array['defaultextension'] = $this->defaultextension;
		}
		if ($this->classification !== null) {
			$array['classification'] = $this->classification;
		}
		return $array;
	}
}