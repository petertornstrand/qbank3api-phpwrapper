<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\ImageTemplate;
use QBNK\QBank\API\Model\VideoTemplate;

class TemplatesController extends ControllerAbstract
{
    /**
     * Lists Image Templates available.
     *
     * @return ImageTemplate[]
     */
    public function listImageTemplates()
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/templates/images', $parameters);
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
     *
     * @return ImageTemplate
     */
    public function retrieveImageTemplate($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/templates/images/'.$id.'', $parameters);
        $result = new ImageTemplate($result);

        return $result;
    }
    /**
     * Lists Video Templates available.
     *
     * @return VideoTemplate[]
     */
    public function listVideoTemplates()
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/templates/videos', $parameters);
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
     *
     * @return VideoTemplate
     */
    public function retrieveVideoTemplate($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/templates/videos/'.$id.'', $parameters);
        $result = new VideoTemplate($result);

        return $result;
    }
}
