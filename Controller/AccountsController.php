<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\Functionality;
use QBNK\QBank\API\Model\Group;
use QBNK\QBank\API\Model\Role;
use QBNK\QBank\API\Model\User;


/**
 * Accounts control the security in QBank.
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class AccountsController extends ControllerAbstract {
	
	/**
	 * Lists all Functionalities available
	 * @param bool $includeDeleted Indicates if we should include removed Functionalities in the result.
	 * 
	 * @return Functionality[]
	 */
	public function listFunctionalities($includeDeleted = false) {
		$query = array();
		$query[ 'includeDeleted'] = $includeDeleted;
		$functionality = array();
		foreach ($this->get('v1/accounts/functionalities', $query) as $item ) {
			$functionality[] = new Functionality($item);
		}

		return $functionality;
	}

	/**
	 * Fetches a Functionality by the specified identifier.
	 * @param int $id The Functionality identifier.
	 * 
	 * @return Functionality
	 */
	public function retrieveFunctionality($id) {
		return new Functionality($this->get('v1/accounts/functionalities/' . $id));
	}

	/**
	 * Lists all Groups available
	 * @param bool $includeDeleted Indicates if we should include removed Groups in the result.
	 * 
	 * @return Group[]
	 */
	public function listGroups($includeDeleted = false) {
		$query = array();
		$query[ 'includeDeleted'] = $includeDeleted;
		$group = array();
		foreach ($this->get('v1/accounts/groups', $query) as $item ) {
			$group[] = new Group($item);
		}

		return $group;
	}

	/**
	 * Fetches a Group by the specified identifier.
	 * @param int $id The Group identifier.
	 * 
	 * @return Group
	 */
	public function retrieveGroup($id) {
		return new Group($this->get('v1/accounts/groups/' . $id));
	}

	/**
	 * Lists all Roles available
	 * @param bool $includeDeleted Indicates if we should include removed Roles in the result.
	 * 
	 * @return Role[]
	 */
	public function listRoles($includeDeleted = false) {
		$query = array();
		$query[ 'includeDeleted'] = $includeDeleted;
		$role = array();
		foreach ($this->get('v1/accounts/roles', $query) as $item ) {
			$role[] = new Role($item);
		}

		return $role;
	}

	/**
	 * Fetches a Role by the specified identifier.
	 * @param int $id The Role identifier.
	 * 
	 * @return Role
	 */
	public function retrieveRole($id) {
		return new Role($this->get('v1/accounts/roles/' . $id));
	}

	/**
	 * Fetches all settings currently available for the current user.
	 * 
	 * @return array
	 */
	public function listSettings() {
		return $this->get('v1/accounts/settings');
	}

	/**
	 * Fetches a setting for the current user.
	 * @param string $key add <mark>@param {type} $key {comment}</mark> to describe here
	 * 
	 * @return array
	 */
	public function retrieveSetting($key) {
		return $this->get('v1/accounts/settings/' . $key);
	}

	/**
	 * Lists all Users available
	 * @param bool $includeDeleted Indicates if we should include removed Users in the result.
	 * 
	 * @return User[]
	 */
	public function listUsers($includeDeleted = false) {
		$query = array();
		$query[ 'includeDeleted'] = $includeDeleted;
		$user = array();
		foreach ($this->get('v1/accounts/users', $query) as $item ) {
			$user[] = new User($item);
		}

		return $user;
	}

	/**
	 * Fetches a User by the specified identifier.
	 * @param int $id The User identifier.
	 * 
	 * @return User
	 */
	public function retrieveUser($id) {
		return new User($this->get('v1/accounts/users/' . $id));
	}

	/**
	 * Creates a new, previously not existing setting.
	 * @param string $key The key (identifier) of the setting
	 * @param string $value The value of the setting
	 * 
	 * @return void
	 */
	public function createSetting($key, $value) {
		$query = array();
		$query['key'] = $key;
		$query['value'] = $value;
		$this->post('v1/accounts/settings', $query);
	}

	/**
	 * Updates a previously created setting.
	 * @param string $key The key (identifier) of the setting..
	 * @param string $value The value of the setting
	 * 
	 * @return void
	 */
	public function updateSetting($key, $value) {
		$query = array();
		$query['value'] = $value;
		$this->put('v1/accounts/settings/' . $key . '', $query);
	}

}