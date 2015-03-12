<?php


namespace QBNK\QBank\API\Model;


class Video {

	protected $id;
	protected $name;
	protected $mimeType;

	public function __construct($parameters) {
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}

		if (isset($parameters['name'])) {
			$this->setName($parameters['name']);
		}

		if (isset($parameters['mimeType'])) {
			$this->setMimeType($parameters['mimeType']);
		}
	}

	/**
	 * Gets the id of the Video
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the name of the Video
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the mimeType of the Video
	 * @return MimeType
	 */
	public function getMimeType() {
		return $this->mimeType;
	}

	/**
	 * Sets the "id" of the Video
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "name" of the Video
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "mimeType" of the Video
	 * @param MimeType $mimeType
	 * @return $this
	 */
	protected function setMimeType($mimeType) {
		if ($mimeType instanceof MimeType) {
			$this->mimeType = $mimeType;
		} else if (is_array($mimeType)) {
			$this->mimeType = new MimeType($mimeType);
		} else {
			$this->mimeType = null;
			trigger_error('Argument must be an object of class MimeType. Data loss!', E_USER_WARNING);
		}
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
		if ($this->mimeType !== null) {
			$array['mimeType'] = $this->mimeType;
		}
		return $array;
	}
}