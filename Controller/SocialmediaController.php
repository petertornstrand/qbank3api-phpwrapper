<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\CachePolicy;
use QBNK\QBank\API\Model\DeploymentSiteResponse;
use QBNK\QBank\API\Model\SocialMedia;

class SocialmediaController extends ControllerAbstract
{
    /**
     * Fetches a specific SocialMedia site.
     *
     * @param int         $id          The SocialMedia identifier..
     * @param CachePolicy $cachePolicy a custom cache policy used for this request only
     *
     * @return DeploymentSiteResponse
     */
    public function retrieveSocialMedia($id, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query' => [],
            'body' => json_encode([]),
            'headers' => [],
        ];

        $result = $this->get('v1/socialmedia/site/' . $id . '', $parameters, $cachePolicy);
        $result = new DeploymentSiteResponse($result);

        return $result;
    }

    /**
     * Lists all SocialMedia sites.
     *

     * @param CachePolicy $cachePolicy a custom cache policy used for this request only
     *
     * @return SocialMedia[]
     */
    public function listSocialMedias(CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query' => [],
            'body' => json_encode([]),
            'headers' => [],
        ];

        $result = $this->get('v1/socialmedia/sites', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new SocialMedia($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }

    /**
     * Always execute the __destruct method of the abstract class.
     */
    public function __destruct()
    {
        parent::__destruct();
    }
}
