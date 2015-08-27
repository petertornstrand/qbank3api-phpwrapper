<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\CachePolicy;
    use QBNK\QBank\API\Model\DeploymentSite;
    use QBNK\QBank\API\Model\DeploymentSiteResponse;
    use QBNK\QBank\API\Model\Protocol;

    class DeploymentController extends ControllerAbstract
    {
    /**
     * Lists all Protocols.
     *
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     *
     * @return Protocol[]

     */
    public function listProtocols(CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/deployment/protocols', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new Protocol($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    /**
     * Fetches a specific Protocol.
     *
     * @param int $id The Protocol identifier..
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     *
     * @return Protocol

     */
    public function retrieveProtocol($id, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/deployment/protocols/'.$id.'', $parameters, $cachePolicy);
        $result = new Protocol($result);

        return $result;
    }
    /**
     * Lists all DeploymentSites.
     *
     * Lists all DeploymentSites the current User has access to.
     *
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     *
     * @return DeploymentSite[]

     */
    public function listSites(CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/deployment/sites', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new DeploymentSite($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    /**
     * Fetches a specific DeploymentSite.
     *
     * @param int $id The DeploymentSite identifier..
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     *
     * @return DeploymentSite

     */
    public function retrieveSite($id, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/deployment/sites/'.$id.'', $parameters, $cachePolicy);
        $result = new DeploymentSite($result);

        return $result;
    }
    /**
     * Create a DeploymentSite.
     *
     * @param DeploymentSite $deploymentSite A JSON encoded DeploymentSite to create
     *
     * @return DeploymentSiteResponse

     */
    public function createSite(DeploymentSite $deploymentSite)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode(['deploymentSite' => $deploymentSite]),
            'headers' => [],
        ];
        $result = $this->post('v1/deployment', $parameters);
        $result = new DeploymentSiteResponse($result);

        return $result;
    }
    /**
     * Update a DeploymentSite.
     *
     * @param int $id The DeploymentSite identifier.
     * @param DeploymentSite $deploymentSite A JSON encoded DeploymentSite representing the updates
     *
     * @return DeploymentSiteResponse

     */
    public function updateSite($id, DeploymentSite $deploymentSite)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode(['deploymentSite' => $deploymentSite]),
            'headers' => [],
        ];
        $result = $this->post('v1/deployment/'.$id.'', $parameters);
        $result = new DeploymentSiteResponse($result);

        return $result;
    }
    /**
     * Delete a DeploymentSite.
     *
     * You can not delete a DeploymentSite while there are still media deployed there!
     *
     * @param int $id The DeploymentSite identifier.
     *
     * @return DeploymentSiteResponse

     */
    public function removeSite($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->delete('v1/deployment/'.$id.'', $parameters);
        $result = new DeploymentSiteResponse($result);

        return $result;
    }
    }
