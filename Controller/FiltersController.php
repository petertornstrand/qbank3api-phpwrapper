<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\QBankCachePolicy;
use QBNK\QBank\API\Model\FilterItem;


/**
 * Filters are used for filtering media by its folder, category or a specific property
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class FiltersController extends ControllerAbstract {
	
	/**
	 * Returns a array of FilterItem for the chosen categories, optionally filtered by specific DeploymentSites.
	 * @param string $categoryIds Comma separated string categoryIds we should fetch objectIds for.
	 * @param string $deploymentSiteIds Comma separated string of deploymentSiteIds we should fetch objectIds for.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return FilterItem[]
	 */
	public function categories($categoryIds, $deploymentSiteIds = null, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'deploymentSiteIds'] = $deploymentSiteIds;
		$filterItem = array();
		foreach ($this->get('v1/filters/categories/' . $categoryIds . '', $query, $cachePolicy) as $item ) {
			$filterItem[] = new FilterItem($item);
		}

		return $filterItem;
	}

	/**
	 * Returns a array of FilterItem for the chosen folder subfolders, optionally filtered by specific CategoryIds and/or DeploymentSites.
	 * @param int $parentFolderId The folder id..
	 * @param string $categoryIds Comma separated string categoryIds we should fetch objectIds for.
	 * @param string $deploymentSiteIds Comma separated string of deploymentSiteIds we should fetch objectIds for.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return FilterItem[]
	 */
	public function folder($parentFolderId, $categoryIds = null, $deploymentSiteIds = null, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'categoryIds'] = $categoryIds;
		$query[ 'deploymentSiteIds'] = $deploymentSiteIds;
		$filterItem = array();
		foreach ($this->get('v1/filters/folder/' . $parentFolderId . '', $query, $cachePolicy) as $item ) {
			$filterItem[] = new FilterItem($item);
		}

		return $filterItem;
	}

	/**
	 * Returns a array of FilterItem for the chosen property, optionally filtered by specific CategoryIds and/or DeploymentSites.
	 * @param string $systemName System name of property to filter by.
	 * @param bool $preloadNames If item names should be preloaded from property type.
	 * @param string $categoryIds Comma separated string categoryIds we should fetch objectIds for.
	 * @param string $deploymentSiteIds Comma separated string of deploymentSiteIds we should fetch objectIds for.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return FilterItem[]
	 */
	public function property($systemName, $preloadNames = false, $categoryIds = null, $deploymentSiteIds = null, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'preloadNames'] = $preloadNames;
		$query[ 'categoryIds'] = $categoryIds;
		$query[ 'deploymentSiteIds'] = $deploymentSiteIds;
		$filterItem = array();
		foreach ($this->get('v1/filters/property/' . $systemName . '', $query, $cachePolicy) as $item ) {
			$filterItem[] = new FilterItem($item);
		}

		return $filterItem;
	}

}