<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\CachePolicy;
    use QBNK\QBank\API\Model\ImageTemplate;
    use QBNK\QBank\API\Model\VideoTemplate;

    class TemplatesController extends ControllerAbstract
    {
        /**
     * Lists Image Templates available.
     * 
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     
     * @return ImageTemplate[]	 
     */
    public function listImageTemplates(CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/templates/images', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new ImageTemplate($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }

    /**
     * Fetches a specific Image Template.
     * 
     * Fetches a Image Template by the specified identifier.
     * 
     * @param int $id The Image Template identifier.
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     
     * @return ImageTemplate	 
     */
    public function retrieveImageTemplate($id, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/templates/images/'.$id.'', $parameters, $cachePolicy);
        $result = new ImageTemplate($result);

        return $result;
    }

    /**
     * Lists Video Templates available.
     * 
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     
     * @return VideoTemplate[]	 
     */
    public function listVideoTemplates(CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/templates/videos', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new VideoTemplate($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }

    /**
     * Fetches a specific Video Template.
     * 
     * Fetches a Video Template by the specified identifier.
     * 
     * @param int $id The Video Template identifier.
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     
     * @return VideoTemplate	 
     */
    public function retrieveVideoTemplate($id, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/templates/videos/'.$id.'', $parameters, $cachePolicy);
        $result = new VideoTemplate($result);

        return $result;
    }
    }
