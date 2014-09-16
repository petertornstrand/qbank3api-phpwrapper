<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Image implements \JsonSerializable {

	/**
	 * The Image Template identifier
	 * @var int
	 */
	protected $id;

	/**
	 * The name of the Image Template
	 * @var string
	 */
	protected $name;

	/**
	 * The background color to use for extented space
	 * @var int
	 */
	protected $background;

	/**
	 * The direction you choose specifies where to position text or subimages.
	 * @var int
	 */
	protected $gravity;

	/**
	 * The IccProfile to use
	 * @var IccProfile
	 */
	protected $iccProfile;

	/**
	 * Indicates if resize should keep aspect ratio
	 * @var boolean
	 */
	protected $keepRatio;

	/**
	 * 
	 * @var MimeType
	 */
	protected $mimeType;

	/**
	 * Quality setting for JPEG compression
	 * @var int
	 */
	protected $quality;

	/**
	 * X aspect ratio
	 * @var int
	 */
	protected $ratiox;

	/**
	 * Y aspect ratio
	 * @var int
	 */
	protected $ratioy;

	/**
	 * Resolution of image
	 * @var int
	 */
	protected $resolution;

	/**
	 * Width of processed image
	 * @var int
	 */
	protected $width;

	/**
	 * Height of processed image
	 * @var int
	 */
	protected $height;

	/**
	 * Indicates if we should extend the size of the background when keeping aspect ratio
	 * @var boolean
	 */
	protected $extent;


	/**
	 * Constructs a {@link Image }.
	 * @param array $parameters An array of parameters to initialize the {@link Image } with.
	 * - <b>id</b> - The Image Template identifier
	 * - <b>name</b> - The name of the Image Template
	 * - <b>background</b> - The background color to use for extented space
	 * - <b>gravity</b> - The direction you choose specifies where to position text or subimages.
	 * - <b>iccProfile</b> - The IccProfile to use
	 * - <b>keepRatio</b> - Indicates if resize should keep aspect ratio
	 * - <b>mimeType</b> - 
	 * - <b>quality</b> - Quality setting for JPEG compression
	 * - <b>ratiox</b> - X aspect ratio
	 * - <b>ratioy</b> - Y aspect ratio
	 * - <b>resolution</b> - Resolution of image
	 * - <b>width</b> - Width of processed image
	 * - <b>height</b> - Height of processed image
	 * - <b>extent</b> - Indicates if we should extend the size of the background when keeping aspect ratio
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['name'])) {
			$this->setName($parameters['name']);
		}
	
		if (isset($parameters['background'])) {
			$this->setBackground($parameters['background']);
		}
	
		if (isset($parameters['gravity'])) {
			$this->setGravity($parameters['gravity']);
		}
	
		if (isset($parameters['iccProfile'])) {
			$this->setIccProfile($parameters['iccProfile']);
		}
	
		if (isset($parameters['keepRatio'])) {
			$this->setKeepRatio($parameters['keepRatio']);
		}
	
		if (isset($parameters['mimeType'])) {
			$this->setMimeType($parameters['mimeType']);
		}
	
		if (isset($parameters['quality'])) {
			$this->setQuality($parameters['quality']);
		}
	
		if (isset($parameters['ratiox'])) {
			$this->setRatiox($parameters['ratiox']);
		}
	
		if (isset($parameters['ratioy'])) {
			$this->setRatioy($parameters['ratioy']);
		}
	
		if (isset($parameters['resolution'])) {
			$this->setResolution($parameters['resolution']);
		}
	
		if (isset($parameters['width'])) {
			$this->setWidth($parameters['width']);
		}
	
		if (isset($parameters['height'])) {
			$this->setHeight($parameters['height']);
		}
	
		if (isset($parameters['extent'])) {
			$this->setExtent($parameters['extent']);
		}
	
	}


	/**
	 * Gets the id of the Image
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the name of the Image
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the background of the Image
	 * @return int
	 */
	public function getBackground() {
		return $this->background;
	}

	/**
	 * Gets the gravity of the Image
	 * @return int
	 */
	public function getGravity() {
		return $this->gravity;
	}

	/**
	 * Gets the iccProfile of the Image
	 * @return IccProfile
	 */
	public function getIccProfile() {
		return $this->iccProfile;
	}

	/**
	 * Gets the keepRatio of the Image
	 * @return boolean
	 */
	public function getKeepRatio() {
		return $this->keepRatio;
	}

	/**
	 * Gets the mimeType of the Image
	 * @return MimeType
	 */
	public function getMimeType() {
		return $this->mimeType;
	}

	/**
	 * Gets the quality of the Image
	 * @return int
	 */
	public function getQuality() {
		return $this->quality;
	}

	/**
	 * Gets the ratiox of the Image
	 * @return int
	 */
	public function getRatiox() {
		return $this->ratiox;
	}

	/**
	 * Gets the ratioy of the Image
	 * @return int
	 */
	public function getRatioy() {
		return $this->ratioy;
	}

	/**
	 * Gets the resolution of the Image
	 * @return int
	 */
	public function getResolution() {
		return $this->resolution;
	}

	/**
	 * Gets the width of the Image
	 * @return int
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Gets the height of the Image
	 * @return int
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Gets the extent of the Image
	 * @return boolean
	 */
	public function getExtent() {
		return $this->extent;
	}



	/**
	 * Sets the "id" of the Image
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "name" of the Image
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "background" of the Image
	 * @param int $background
	 * @return $this
	 */
	protected function setBackground($background) {
		$this->background = $background;
		return $this;
	}

	/**
	 * Sets the "gravity" of the Image
	 * @param int $gravity
	 * @return $this
	 */
	protected function setGravity($gravity) {
		$this->gravity = $gravity;
		return $this;
	}

	/**
	 * Sets the "iccProfile" of the Image
	 * @param IccProfile $iccProfile
	 * @return $this
	 */
	protected function setIccProfile($iccProfile) {
		$this->iccProfile = $iccProfile;
		return $this;
	}

	/**
	 * Sets the "keepRatio" of the Image
	 * @param boolean $keepRatio
	 * @return $this
	 */
	protected function setKeepRatio($keepRatio) {
		$this->keepRatio = (bool)$keepRatio;
		return $this;
	}

	/**
	 * Sets the "mimeType" of the Image
	 * @param MimeType $mimeType
	 * @return $this
	 */
	protected function setMimeType($mimeType) {
		$this->mimeType = $mimeType;
		return $this;
	}

	/**
	 * Sets the "quality" of the Image
	 * @param int $quality
	 * @return $this
	 */
	protected function setQuality($quality) {
		$this->quality = $quality;
		return $this;
	}

	/**
	 * Sets the "ratiox" of the Image
	 * @param int $ratiox
	 * @return $this
	 */
	protected function setRatiox($ratiox) {
		$this->ratiox = $ratiox;
		return $this;
	}

	/**
	 * Sets the "ratioy" of the Image
	 * @param int $ratioy
	 * @return $this
	 */
	protected function setRatioy($ratioy) {
		$this->ratioy = $ratioy;
		return $this;
	}

	/**
	 * Sets the "resolution" of the Image
	 * @param int $resolution
	 * @return $this
	 */
	protected function setResolution($resolution) {
		$this->resolution = $resolution;
		return $this;
	}

	/**
	 * Sets the "width" of the Image
	 * @param int $width
	 * @return $this
	 */
	protected function setWidth($width) {
		$this->width = $width;
		return $this;
	}

	/**
	 * Sets the "height" of the Image
	 * @param int $height
	 * @return $this
	 */
	protected function setHeight($height) {
		$this->height = $height;
		return $this;
	}

	/**
	 * Sets the "extent" of the Image
	 * @param boolean $extent
	 * @return $this
	 */
	protected function setExtent($extent) {
		$this->extent = (bool)$extent;
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
		if ($this->background !== null) {
			$array['background'] = $this->background;
		}
		if ($this->gravity !== null) {
			$array['gravity'] = $this->gravity;
		}
		if ($this->iccProfile !== null) {
			$array['iccProfile'] = $this->iccProfile;
		}
		if ($this->keepRatio !== null) {
			$array['keepRatio'] = $this->keepRatio;
		}
		if ($this->mimeType !== null) {
			$array['mimeType'] = $this->mimeType;
		}
		if ($this->quality !== null) {
			$array['quality'] = $this->quality;
		}
		if ($this->ratiox !== null) {
			$array['ratiox'] = $this->ratiox;
		}
		if ($this->ratioy !== null) {
			$array['ratioy'] = $this->ratioy;
		}
		if ($this->resolution !== null) {
			$array['resolution'] = $this->resolution;
		}
		if ($this->width !== null) {
			$array['width'] = $this->width;
		}
		if ($this->height !== null) {
			$array['height'] = $this->height;
		}
		if ($this->extent !== null) {
			$array['extent'] = $this->extent;
		}
		return $array;
	}
}