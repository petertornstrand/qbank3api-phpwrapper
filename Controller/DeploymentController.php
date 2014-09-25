<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\QBankCachePolicy;
use QBNK\QBank\API\Model\Protocol;
use QBNK\QBank\API\Model\DeploymentSite;


/**
 * DeploymentSites are places where Media from QBank may be published to, to allow public access. Protocols define the way the publishing executes.
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class DeploymentController extends ControllerAbstract {
	
	/**
	 * Lists all Protocols.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Protocol[]
	 */
	public function listProtocols(QBankCachePolicy $cachePolicy = null) {
		$protocol = array();
		foreach ($this->get('v1/deployment/protocols', [], $cachePolicy) as $item ) {
			$protocol[] = new Protocol($item);
		}

		return $protocol;
	}

	/**
	 * Fetches a specific Protocol.
	 * @param int $id The Protocol identifier..
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Protocol
	 */
	public function retrieveProtocol($id, QBankCachePolicy $cachePolicy = null) {
		return new Protocol($this->get('v1/deployment/protocols/' . $id . '', [], $cachePolicy));
	}

	/**
	 * Lists all DeploymentSites the current User has access to.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return DeploymentSite[]
	 */
	public function listSites(QBankCachePolicy $cachePolicy = null) {
		$deploymentSite = array();
		foreach ($this->get('v1/deployment/sites', [], $cachePolicy) as $item ) {
			$deploymentSite[] = new DeploymentSite($item);
		}

		return $deploymentSite;
	}

	/**
	 * Fetches a specific DeploymentSite.
	 * @param int $id The DeploymentSite identifier..
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return DeploymentSite
	 */
	public function retrieveSite($id, QBankCachePolicy $cachePolicy = null) {
		return new DeploymentSite($this->get('v1/deployment/sites/' . $id . '', [], $cachePolicy));
	}

}