<?php

namespace QBNK\QBank\API\Controller;

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
     *
     * @return FilterItem[]
     */
    public function categories($categoryIds, $deploymentSiteIds = null)
    {
        $parameters = [
            'query'   => ['deploymentSiteIds' => $deploymentSiteIds],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/filters/categories/'.$categoryIds.'', $parameters);
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
     *
     * @return FilterItem[]
     */
    public function folder($parentFolderId, $categoryIds = null, $deploymentSiteIds = null)
    {
        $parameters = [
            'query'   => ['categoryIds' => $categoryIds, 'deploymentSiteIds' => $deploymentSiteIds],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/filters/folder/'.$parentFolderId.'', $parameters);
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
     *
     * @return FilterItem[]
     */
    public function property($systemName, $preloadNames = false, $categoryIds = null, $deploymentSiteIds = null)
    {
        $parameters = [
            'query'   => ['preloadNames' => $preloadNames, 'categoryIds' => $categoryIds, 'deploymentSiteIds' => $deploymentSiteIds],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/filters/property/'.$systemName.'', $parameters);
        foreach ($result as &$entry) {
            $entry = new FilterItem($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
}
