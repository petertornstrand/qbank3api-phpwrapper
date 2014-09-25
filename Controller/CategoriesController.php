<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\QBankCachePolicy;
use QBNK\QBank\API\Model\Category;


/**
 * Categories defines which PropertySets should be available for Media. All Media belongs to exactly one Category.
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class CategoriesController extends ControllerAbstract {
	
	/**
	 * Lists all categories that the current user has access to.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Category[]
	 */
	public function listCategories(QBankCachePolicy $cachePolicy = null) {
		$category = array();
		foreach ($this->get('v1/categories', [], $cachePolicy) as $item ) {
			$category[] = new Category($item);
		}

		return $category;
	}

	/**
	 * Fetches a Category by the specified identifier.
	 * @param int $id The Category identifier.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Category
	 */
	public function retrieveCategory($id, QBankCachePolicy $cachePolicy = null) {
		return new Category($this->get('v1/categories/' . $id . '', [], $cachePolicy));
	}

}