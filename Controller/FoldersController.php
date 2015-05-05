<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\CachePolicy;
use QBNK\QBank\API\Model\Folder;
use QBNK\QBank\API\Model\FolderParent;
use QBNK\QBank\API\Model\FolderResponse;

class FoldersController extends ControllerAbstract
{
    /**
     * Lists all Folders.
     *
     * Lists all the Folders that the current user has access to.
     *
     * @param int $root The identifier of a Folder to be treated as the root. Use zero for the absolute root. The root will not be included in the result..
     * @param int $depth The depth for which to include existing subfolders. Use zero to exclude them all together..
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     *
     * @return FolderResponse[]
     */
    public function listFolders($root = 0, $depth = 0, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => ['root' => $root, 'depth' => $depth],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/folders', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new FolderResponse($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    /**
     * Fetches a specific Folder.
     *
     * Fetches a Folder by the specified identifier.
     *
     * @param int $id The Folder identifier..
     * @param int $depth The depth for which to include existing subfolders. Use zero to exclude them all together..
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     *
     * @return FolderResponse
     */
    public function retrieveFolder($id, $depth = 0, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => ['depth' => $depth],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/folders/'.$id.'', $parameters, $cachePolicy);
        $result = new FolderResponse($result);

        return $result;
    }
    /**
     * Lists all parent Folders until the absolute root.
     *
     * Lists all parent Folders from the specified to the absolute root, with distances.
     *
     * @param int $id The Folder identifier.
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     *
     * @return FolderParent[]
     */
    public function retrieveParents($id, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/folders/'.$id.'/parents', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new FolderParent($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    /**
     * Create a Folder.
     *
     * @param int $parentId An optional parent folder ID. Will otherwise be created in the root level. Note that root level creation requires additional access!.
     * @param Folder $folder A JSON encoded Folder to create
     * @param bool $inheritAccess Decides whether this Folder will inherit access from its parent folder
     *
     * @return FolderResponse
     */
    public function createFolder($parentId = 0, Folder $folder, $inheritAccess)
    {
        $parameters = [
            'query'   => ['parentId'           => $parentId],
            'body'    => json_encode(['folder' => $folder, 'inheritAccess' => $inheritAccess]),
            'headers' => [],
        ];
        $result = $this->post('v1/folders', $parameters);
        $result = new FolderResponse($result);

        return $result;
    }
    /**
     * Add Media to Folder.
     *
     * @param int $folderId Folder to add media to.
     * @param array $mediaIds Paste JSON array data here (required) . <br/>An array of media ids to add to the specified folder.
     *
     * @return Folder
     */
    public function addMediaToFolder($folderId, $mediaIds)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode(['mediaIds' => $mediaIds]),
            'headers' => [],
        ];
        $result = $this->post('v1/folders/'.$folderId.'/media', $parameters);
        $result = new Folder($result);

        return $result;
    }
    /**
     * Update a Folder. Move a folder by updating the parent folder id.
     *
     * Update a Folder.
     *
     * @param int $id The Folder identifier.
     * @param Folder $folder A JSON encoded Folder representing the updates
     *
     * @return FolderResponse
     */
    public function updateFolder($id, Folder $folder)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode(['folder' => $folder]),
            'headers' => [],
        ];
        $result = $this->post('v1/folders/'.$id.'', $parameters);
        $result = new FolderResponse($result);

        return $result;
    }
    /**
     * Remove Media from Folder.
     *
     * @param int $folderId Folder to remove media from.
     * @param int $mediaId Media to remove from specified folder.
     *
     * @return array
     */
    public function removeMediaFromFolder($folderId, $mediaId)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->delete('v1/folders/'.$folderId.'/media/'.$mediaId.'', $parameters);

        return $result;
    }
    /**
     * Delete a Folder.
     *
     * Delete a Folder and all subfolders. Will NOT delete Media attached to the Folder.
     *
     * @param int $id The Folder identifier.
     *
     * @return FolderResponse
     */
    public function removeFolder($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->delete('v1/folders/'.$id.'', $parameters);
        $result = new FolderResponse($result);

        return $result;
    }
}
