<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\Moodboard;


/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class MoodboardsController extends ControllerAbstract {
	
	/**
	 * Lists all Moodboards that the current user has access to.
	 * 
	 * @return Moodboard[]
	 */
	public function listMoodboards() {
		$moodboard = array();
		foreach ($this->get('v1/moodboards') as $item ) {
			$moodboard[] = new Moodboard($item);
		}

		return $moodboard;
	}

	/**
	 * Fetches a Moodboard by the specified identifier.
	 * @param int $id The Moodboard identifier.
	 * 
	 * @return Moodboard
	 */
	public function retrieveMoodboard($id) {
		return new Moodboard($this->get('v1/moodboards/' . $id));
	}

}