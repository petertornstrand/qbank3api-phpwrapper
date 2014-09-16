<?php

namespace QBNK\QBank\API\Model;



/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class IntRange implements \JsonSerializable {

	/**
	 * Minimum integer in this range, leave empty for none.
	 * @var int
	 */
	protected $min;

	/**
	 * Maximum integer in this range, leave empty for none.
	 * @var int
	 */
	protected $max;


	/**
	 * Constructs a {@link IntRange }.
	 * @param array $parameters An array of parameters to initialize the {@link IntRange } with.
	 * - <b>min</b> - Minimum integer in this range, leave empty for none.
	 * - <b>max</b> - Maximum integer in this range, leave empty for none.
	 * 
	 */
	public function __construct($parameters) {
		
		if (isset($parameters['min'])) {
			$this->setMin($parameters['min']);
		}
	
		if (isset($parameters['max'])) {
			$this->setMax($parameters['max']);
		}
	
	}


	/**
	 * Gets the min of the IntRange
	 * @return int
	 */
	public function getMin() {
		return $this->min;
	}

	/**
	 * Gets the max of the IntRange
	 * @return int
	 */
	public function getMax() {
		return $this->max;
	}



	/**
	 * Sets the "min" of the IntRange
	 * @param int $min
	 * @return $this
	 */
	public function setMin($min) {
		$this->min = $min;
		return $this;
	}

	/**
	 * Sets the "max" of the IntRange
	 * @param int $max
	 * @return $this
	 */
	public function setMax($max) {
		$this->max = $max;
		return $this;
	}

	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->min !== null) {
			$array['min'] = $this->min;
		}
		if ($this->max !== null) {
			$array['max'] = $this->max;
		}
		return $array;
	}
}