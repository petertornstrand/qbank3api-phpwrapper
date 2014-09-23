<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\Image;


/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class TemplatesController extends ControllerAbstract {
	
	/**
	 * Lists Image Templates available
	 * 
	 * @return Image[]
	 */
	public function listImageTemplates() {
		$image = array();
		foreach ($this->get('v1/templates/images') as $item ) {
			$image[] = new Image($item);
		}

		return $image;
	}

	/**
	 * Fetches a Image Template by the specified identifier.
	 * @param int $id The Image Template identifier.
	 * 
	 * @return Image
	 */
	public function retrieveImageTemplate($id) {
		return new Image($this->get('v1/templates/images/' . $id));
	}

}