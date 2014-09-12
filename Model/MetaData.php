<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class MetaData {

	/**
	 * The MetaData section name.
	 * @var string
	 */
	protected $section;

	/**
	 * The MetaData data as a key-value object.
	 * @var Object
	 */
	protected $data;


	/**
	 * Constructs a {@link MetaData }.
	 * @param array $parameters An array of parameters to initialize the {@link MetaData } with.
	 * - <b>section</b> - The MetaData section name.
	 * - <b>data</b> - The MetaData data as a key-value object.
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['section'])) {
			$this->setSection($parameters['section']);
		}
	
		if (isset($parameters['data'])) {
			$this->setData($parameters['data']);
		}
	
	}


	/**
	 * Gets the section of the MetaData
	 * @return string
	 */
	public function getSection() {
		return $this->section;
	}

	/**
	 * Gets the data of the MetaData
	 * @return Object
	 */
	public function getData() {
		return $this->data;
	}



	/**
	 * Sets the "section" of the MetaData
	 * @param string $section
	 * @return $this
	 */
	public function setSection($section) {
		$this->section = $section;
		return $this;
	}

	/**
	 * Sets the "data" of the MetaData
	 * @param Object $data
	 * @return $this
	 */
	public function setData($data) {
		$this->data = $data;
		return $this;
	}
}