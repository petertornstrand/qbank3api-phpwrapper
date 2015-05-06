<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\CachePolicy;
    use QBNK\QBank\API\Model\Moodboard;
    use QBNK\QBank\API\Model\MoodboardResponse;

    class MoodboardsController extends ControllerAbstract
    {
    /**
     * Lists all Moodboards.
     *
     * that the current user has access to.
     *
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     *
     * @return MoodboardResponse[]
     */
    public function listMoodboards(CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/moodboards', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new MoodboardResponse($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    /**
     * Fetches a specific Moodboard.
     *
     * Fetches a Moodboard by the specified identifier.
     *
     * @param int $id The Moodboard identifier.
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     *
     * @return MoodboardResponse
     */
    public function retrieveMoodboard($id, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/moodboards/'.$id.'', $parameters, $cachePolicy);
        $result = new MoodboardResponse($result);

        return $result;
    }
    /**
     * Create a moodboard.
     *
     * Create a Moodboard
     *
     * @param Moodboard $moodboard A JSON encoded Moodboard to create
     *
     * @return MoodboardResponse
     */
    public function createMoodboard(Moodboard $moodboard)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode(['moodboard' => $moodboard]),
            'headers' => [],
        ];
        $result = $this->post('v1/moodboards', $parameters);
        $result = new MoodboardResponse($result);

        return $result;
    }
    /**
     * Update a moodboard.
     *
     * Update a Moodboard.
     *
     * @param int $id The Moodboard identifier.
     * @param Moodboard $moodboard A JSON encoded Moodboard representing the updates
     *
     * @return MoodboardResponse
     */
    public function updateMoodboard($id, Moodboard $moodboard)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode(['moodboard' => $moodboard]),
            'headers' => [],
        ];
        $result = $this->post('v1/moodboards/'.$id.'', $parameters);
        $result = new MoodboardResponse($result);

        return $result;
    }
    /**
     * Add Media to a Moodboard.
     *
     * @param int $moodboardId Moodboard ID to add media to.
     * @param int[] $mediaIds Paste JSON data here with an array of int values.
     *
     * @return array
     */
    public function addMediaToMoodboard($moodboardId, array $mediaIds)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode(['mediaIds' => $mediaIds]),
            'headers' => [],
        ];
        $result = $this->post('v1/moodboards/'.$moodboardId.'/media', $parameters);

        return $result;
    }
    /**
     * Delete a Moodboard.
     *
     * Will NOT delete Media attached to the Moodboard.
     *
     * @param int $id The Moodboard identifier.
     *
     * @return MoodboardResponse
     */
    public function removeMoodboard($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->delete('v1/moodboards/'.$id.'', $parameters);
        $result = new MoodboardResponse($result);

        return $result;
    }
    /**
     * Remove Media from a Moodboard.
     *
     * @param int $moodboardId Moodboard ID to remove media from.
     * @param int $mediaId Media ID to remove from specified folder.
     *
     * @return array
     */
    public function removeMediaFromMoodboard($moodboardId, $mediaId)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->delete('v1/moodboards/'.$moodboardId.'/media/'.$mediaId.'', $parameters);

        return $result;
    }
    }
