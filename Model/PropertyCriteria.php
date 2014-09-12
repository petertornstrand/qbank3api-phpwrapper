<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class PropertyCriteria {

	/**
	 * The system name of the Property we filter on
	 * @var string
	 */
	protected $systemName;

	/**
	 * The value we filter by
	 * @var string
	 */
	protected $value;

	/**
	 * Comparison operator for the criteria
	 * @var string
	 */
	protected $operator;


	/**
	 * Constructs a {@link PropertyCriteria }.
	 * @param array $parameters An array of parameters to initialize the {@link PropertyCriteria } with.
	 * - <b>systemName</b> - The system name of the Property we filter on
	 * - <b>value</b> - The value we filter by
	 * - <b>operator</b> - Comparison operator for the criteria
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['systemName'])) {
			$this->setSystemName($parameters['systemName']);
		}
	
		if (isset($parameters['value'])) {
			$this->setValue($parameters['value']);
		}
	
		if (isset($parameters['operator'])) {
			$this->setOperator($parameters['operator']);
		}
	
	}


	/**
	 * Gets the systemName of the PropertyCriteria
	 * @return string
	 */
	public function getSystemName() {
		return $this->systemName;
	}

	/**
	 * Gets the value of the PropertyCriteria
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Gets the operator of the PropertyCriteria
	 * @return string
	 */
	public function getOperator() {
		return $this->operator;
	}



	/**
	 * Sets the "systemName" of the PropertyCriteria
	 * @param string $systemName
	 * @return $this
	 */
	public function setSystemName($systemName) {
		$this->systemName = $systemName;
		return $this;
	}

	/**
	 * Sets the "value" of the PropertyCriteria
	 * @param string $value
	 * @return $this
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}

	/**
	 * Sets the "operator" of the PropertyCriteria
	 * @param string $operator
	 * @return $this
	 */
	public function setOperator($operator) {
		$this->operator = $operator;
		return $this;
	}
}