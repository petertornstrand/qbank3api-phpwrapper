<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\QBankCachePolicy;
use QBNK\QBank\API\Model\Media;
use QBNK\QBank\API\Model\DeploymentFile;
use QBNK\QBank\API\Model\DeploymentSite;
use QBNK\QBank\API\Model\Folder;
use QBNK\QBank\API\Model\Moodboard;


/**
 * A Media is any uploaded file in QBank. A Media belongs to a Category and mey have customer defined Properties.
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class MediaController extends ControllerAbstract {
	
	/**
	 * Fetches a specific Media.
	 * @param int $id The Media identifier.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Media
	 */
	public function retrieveMedia($id, QBankCachePolicy $cachePolicy = null) {
		return new Media($this->get('v1/media/' . $id . '', [], $cachePolicy));
	}

	/**
	 * Gets the raw file data of a Media. You may append an optional template parameter to the query. Omitting the template parameter will return the medium thumbnail. <br><br> Existing templates are:<br> <b>original</b> - The original file<br> <b>preview</b> - A preview image, sized 1000px on the long side<br> <b>thumb_small</b> - A thumbnail image, sized 100px on the long side<br> <b>thumb_medium</b> - A thumbnail image, sized 200px on the long side<br> <b>thumb_large</b> - A thumbnail image, sized 300px on the long side<br> <b>videopreview</b> - A preview video, sized 360p and maximum 2min<br> <b>{integer}</b> - An image template identifier
	 * @param int $id The Media identifier..
	 * @param string $template Optional template of Media..
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return void
	 */
	public function retrieveFileData($id, $template = null, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'template'] = $template;
		$this->get('v1/media/' . $id . '/asset', $query, $cachePolicy);
	}

	/**
	 * Fetches all DeployedFiles a media has.
	 * @param int $id The Media identifier..
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return DeploymentFile[]
	 */
	public function listDeployedFiles($id, QBankCachePolicy $cachePolicy = null) {
		$deploymentFile = array();
		foreach ($this->get('v1/media/' . $id . '/deployment/files', [], $cachePolicy) as $item ) {
			$deploymentFile[] = new DeploymentFile($item);
		}

		return $deploymentFile;
	}

	/**
	 * Fetches all DeploymentSites a Media is deployed to.
	 * @param int $id The Media identifier..
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return DeploymentSite[]
	 */
	public function listDeploymentSites($id, QBankCachePolicy $cachePolicy = null) {
		$deploymentSite = array();
		foreach ($this->get('v1/media/' . $id . '/deployment/sites', [], $cachePolicy) as $item ) {
			$deploymentSite[] = new DeploymentSite($item);
		}

		return $deploymentSite;
	}

	/**
	 * Downloads a specific Media. You may append an optional template parameter to the query. Omitting the template parameter will return the original file.
	 * @param int $id The Media identifier.
	 * @param string $template Optional template to download the media in.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return void
	 */
	public function download($id, $template = null, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'template'] = $template;
		$this->get('v1/media/' . $id . '/download', $query, $cachePolicy);
	}

	/**
	 * Fetches all Folders a Media resides in.
	 * @param int $id The Media identifier..
	 * @param int $depth The depth for which to include existing subfolders. Use zero to exclude them all toghether..
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Folder[]
	 */
	public function listFolders($id, $depth = 0, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'depth'] = $depth;
		$folder = array();
		foreach ($this->get('v1/media/' . $id . '/folders', $query, $cachePolicy) as $item ) {
			$folder[] = new Folder($item);
		}

		return $folder;
	}

	/**
	 * Fetches all Moodboards a Media is a member of.
	 * @param int $id The Media identifier..
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Moodboard[]
	 */
	public function listMoodboards($id, QBankCachePolicy $cachePolicy = null) {
		$moodboard = array();
		foreach ($this->get('v1/media/' . $id . '/moodboards', [], $cachePolicy) as $item ) {
			$moodboard[] = new Moodboard($item);
		}

		return $moodboard;
	}

	/**
	 * Downloads an archive of several Media. You may append an optional template parameter to the query. Omitting the template parameter will return the original files.
	 * @param int[] $ids Array of Media ID:s to download.
	 * @param string $template Optional template to download all Media in..
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return void
	 */
	public function downloadArchive($ids, $template = null, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'ids'] = $ids;
		$query[ 'template'] = $template;
		$this->get('v1/media/download', $query, $cachePolicy);
	}

}