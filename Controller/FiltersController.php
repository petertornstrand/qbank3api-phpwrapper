<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\CachePolicy;
    use QBNK\QBank\API\Model\FilterItem;

    class FiltersController extends ControllerAbstract
    {
        /**
     * Returns a array of FilterItem for the chosen categories.
     * 
     * , optionally filtered by specific DeploymentSites.
     * 
     * @param string $categoryIds Comma separated string categoryIds we should fetch mediaIds for.
     * @param string $deploymentSiteIds Comma separated string of deploymentSiteIds we should fetch mediaIds for.
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     
     * @return FilterItem[]	 
     */
    public function categories($categoryIds, $deploymentSiteIds = null, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => ['deploymentSiteIds' => $deploymentSiteIds],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/filters/categories/'.$categoryIds.'', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new FilterItem($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    /**
     * Returns a array of FilterItem for the chosen folder subfolders.
     * 
     * , optionally filtered by specific CategoryIds and/or DeploymentSites.
     * 
     * @param int $parentFolderId The folder id..
     * @param string $categoryIds Comma separated string categoryIds we should fetch mediaIds for.
     * @param string $deploymentSiteIds Comma separated string of deploymentSiteIds we should fetch mediaIds for.
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     
     * @return FilterItem[]	 
     */
    public function folder($parentFolderId, $categoryIds = null, $deploymentSiteIds = null, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => ['categoryIds' => $categoryIds, 'deploymentSiteIds' => $deploymentSiteIds],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/filters/folder/'.$parentFolderId.'', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new FilterItem($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    /**
     * Returns a array of FilterItem for the chosen property.
     * 
     * , optionally filtered by specific CategoryIds and/or DeploymentSites.
     * 
     * @param string $systemName System name of property to filter by.
     * @param bool $preloadNames If item names should be preloaded from property type.
     * @param string $categoryIds Comma separated string categoryIds we should fetch mediaIds for.
     * @param string $deploymentSiteIds Comma separated string of deploymentSiteIds we should fetch mediaIds for.
     * @param bool $isHierarchical add <mark>@param {type} $isHierarchical {comment}</mark> to describe here
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     
     * @return FilterItem[]	 
     */
    public function property($systemName, $preloadNames = false, $categoryIds = null, $deploymentSiteIds = null, $isHierarchical = false, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => ['preloadNames' => $preloadNames, 'categoryIds' => $categoryIds, 'deploymentSiteIds' => $deploymentSiteIds, 'isHierarchical' => $isHierarchical],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/filters/property/'.$systemName.'', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new FilterItem($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    }
