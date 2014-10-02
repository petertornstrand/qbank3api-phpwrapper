<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\QBankCachePolicy;
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
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Moodboard[]
	 */
	public function listMoodboards(QBankCachePolicy $cachePolicy = null) {
		$moodboard = array();
		foreach ($this->get('v1/moodboards', [], $cachePolicy) as $item ) {
			$moodboard[] = new Moodboard($item);
		}

		return $moodboard;
	}

	/**
	 * Fetches a Moodboard by the specified identifier.
	 * @param int $id The Moodboard identifier.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Moodboard
	 */
	public function retrieveMoodboard($id, QBankCachePolicy $cachePolicy = null) {
		return new Moodboard($this->get('v1/moodboards/' . $id . '', [], $cachePolicy));
	}

}