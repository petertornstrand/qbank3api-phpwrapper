<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\Folder;
use QBNK\QBank\API\Model\FolderParent;


/**
 * Folders are used to group Media in a hierarchial manner.
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class FoldersController extends ControllerAbstract {
	
	/**
	 * Lists all the Folders that the current user has access to.
	 * @param int $root The identifier of a Folder to be treated as the root. Use zero for the absolute root. The root will not be included in the result..
	 * @param int $depth The depth for which to include existing subfolders. Use zero to exclude them all toghether..
	 * 
	 * @return Folder[]
	 */
	public function listFolders($root = 0, $depth = 0) {
		$query[ 'root'] = $root;
		$query[ 'depth'] = $depth;
		$folder = array();
		foreach ($this->get('v1/folders', $query) as $item ) {
			$folder[] = new Folder($item);
		}

		return $folder;
	}

	/**
	 * Fetches a Folder by the specified identifier.
	 * @param int $id The Folder identifier..
	 * @param int $depth The depth for which to include existing subfolders. Use zero to exclude them all toghether..
	 * 
	 * @return Folder
	 */
	public function retrieveFolder($id, $depth = 0) {
		$query[ 'depth'] = $depth;
		return new Folder($this->get('v1/folders/' . $id . '', $query));
	}

	/**
	 * Lists all parent Folders from the specified to the absolute root, with distances.
	 * @param int $id The Folder identifier.
	 * 
	 * @return FolderParent[]
	 */
	public function retrieveParents($id) {
		$folderParent = array();
		foreach ($this->get('v1/folders/' . $id . '/parents') as $item ) {
			$folderParent[] = new FolderParent($item);
		}

		return $folderParent;
	}

}