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

class DateTimeRange implements \JsonSerializable {

	/**
	 * Minimum date in this range, leave empty for none.
	 * @var DateTime
	 */
	protected $min;

	/**
	 * Maximum date in this range, leave empty for none.
	 * @var DateTime
	 */
	protected $max;


	/**
	 * Constructs a {@link DateTimeRange }.
	 * @param array $parameters An array of parameters to initialize the {@link DateTimeRange } with.
	 * - <b>min</b> - Minimum date in this range, leave empty for none.
	 * - <b>max</b> - Maximum date in this range, leave empty for none.
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
	 * Gets the min of the DateTimeRange
	 * @return date
	 */
	public function getMin() {
		return $this->min;
	}

	/**
	 * Gets the max of the DateTimeRange
	 * @return date
	 */
	public function getMax() {
		return $this->max;
	}



	/**
	 * Sets the "min" of the DateTimeRange
	 * @param DateTime $min
	 * @return $this
	 */
	public function setMin($min) {
		if ($min instanceOf DateTime) {
			$this->min = $min;
		} else {
			try {
				$this->min = new DateTime($min);
			} catch (Exception $e) {
				$this->min = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "max" of the DateTimeRange
	 * @param DateTime $max
	 * @return $this
	 */
	public function setMax($max) {
		if ($max instanceOf DateTime) {
			$this->max = $max;
		} else {
			try {
				$this->max = new DateTime($max);
			} catch (Exception $e) {
				$this->max = null;
			}
		}
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