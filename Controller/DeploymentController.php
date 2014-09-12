<?php

namespace QBNK\QBank\API\Controller;

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
	 * 
	 * @return Protocol[]
	 */
	public function listProtocols() {
		$protocol = array();
		foreach ($this->get('v1/deployment/protocols') as $item ) {
			$protocol[] = new Protocol($item);
		}

		return $protocol;
	}

	/**
	 * Fetches a specific Protocol.
	 * @param int $id The Protocol identifier..
	 * 
	 * @return Protocol
	 */
	public function retrieveProtocol($id) {
		return new Protocol($this->get('v1/deployment/protocols/' . $id));
	}

	/**
	 * Lists all DeploymentSites the current User has access to.
	 * 
	 * @return DeploymentSite[]
	 */
	public function listSites() {
		$deploymentSite = array();
		foreach ($this->get('v1/deployment/sites') as $item ) {
			$deploymentSite[] = new DeploymentSite($item);
		}

		return $deploymentSite;
	}

	/**
	 * Fetches a specific DeploymentSite.
	 * @param int $id The DeploymentSite identifier..
	 * 
	 * @return DeploymentSite
	 */
	public function retrieveSite($id) {
		return new DeploymentSite($this->get('v1/deployment/sites/' . $id));
	}

}