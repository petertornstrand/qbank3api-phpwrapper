<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\QBankCachePolicy;
use QBNK\QBank\API\Model\Image;


/**
 * Use PHPDoc comment to describe here
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class TemplatesController extends ControllerAbstract {
	
	/**
	 * Lists Image Templates available
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Image[]
	 */
	public function listImageTemplates(QBankCachePolicy $cachePolicy = null) {
		$image = array();
		foreach ($this->get('v1/templates/images', [], $cachePolicy) as $item ) {
			$image[] = new Image($item);
		}

		return $image;
	}

	/**
	 * Fetches a Image Template by the specified identifier.
	 * @param int $id The Image Template identifier.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Image
	 */
	public function retrieveImageTemplate($id, QBankCachePolicy $cachePolicy = null) {
		return new Image($this->get('v1/templates/images/' . $id . '', [], $cachePolicy));
	}

}