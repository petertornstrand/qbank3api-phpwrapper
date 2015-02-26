<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\DownloadItem;
use QBNK\QBank\API\Model\Search;

class EventsController extends ControllerAbstract
{
    /**
     * Track a Media download.
     *
     * @param int $sessionId The session id to log the download on
     * @param DownloadItem[] $downloads An array of DownloadItem (media & template) that was downloaded
     */
    public function download($sessionId, array $downloads)
    {
        $parameters = [
            'query'   => [],
            'body'    => ['sessionId' => $sessionId, 'downloads' => json_decode(json_encode($downloads), true)],
            'headers' => [],
        ];
        $result = $this->post('v1/events/download', $parameters);

        return $result;
    }
    /**
     * Track a Search.
     *
     * @param int $sessionId The session id to log the search on
     * @param Search $search The Search that was made
     * @param int $hits Number of hits for this search
     */
    public function search($sessionId, Search $search, $hits)
    {
        $parameters = [
            'query'   => [],
            'body'    => ['sessionId' => $sessionId, 'search' => json_decode(json_encode($search), true), 'hits' => $hits],
            'headers' => [],
        ];
        $result = $this->post('v1/events/search', $parameters);

        return $result;
    }
    /**
     * Creates a sessionId.
     *
     * SessionId must be sent along with all subsequent requests to track events.
     *
     * @param int $sourceId the source we should log things on
     * @param string $sessionHash Some sort of identifier for the user
     * @param string $remoteIp Ip-address of the user
     * @param string $userAgent the User Agent of the user
     */
    public function session($sourceId, $sessionHash, $remoteIp, $userAgent)
    {
        $parameters = [
            'query'   => [],
            'body'    => ['sourceId' => $sourceId, 'sessionHash' => $sessionHash, 'remoteIp' => $remoteIp, 'userAgent' => $userAgent],
            'headers' => [],
        ];
        $result = $this->post('v1/events/session', $parameters);

        return $result;
    }
    /**
     * Track a Media view.
     *
     * @param int $sessionId The session id to log the search on
     * @param int $mediaId The ID of the media that was viewed
     */
    public function view($sessionId, $mediaId)
    {
        $parameters = [
            'query'   => [],
            'body'    => ['sessionId' => $sessionId, 'mediaId' => $mediaId],
            'headers' => [],
        ];
        $result = $this->post('v1/events/view', $parameters);

        return $result;
    }
}
