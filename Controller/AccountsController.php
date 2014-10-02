<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\QBankCachePolicy;
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
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Functionality[]
	 */
	public function listFunctionalities($includeDeleted = false, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'includeDeleted'] = $includeDeleted;
		$functionality = array();
		foreach ($this->get('v1/accounts/functionalities', $query, $cachePolicy) as $item ) {
			$functionality[] = new Functionality($item);
		}

		return $functionality;
	}

	/**
	 * Fetches a Functionality by the specified identifier.
	 * @param int $id The Functionality identifier.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Functionality
	 */
	public function retrieveFunctionality($id, QBankCachePolicy $cachePolicy = null) {
		return new Functionality($this->get('v1/accounts/functionalities/' . $id . '', [], $cachePolicy));
	}

	/**
	 * Lists all Groups available
	 * @param bool $includeDeleted Indicates if we should include removed Groups in the result.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Group[]
	 */
	public function listGroups($includeDeleted = false, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'includeDeleted'] = $includeDeleted;
		$group = array();
		foreach ($this->get('v1/accounts/groups', $query, $cachePolicy) as $item ) {
			$group[] = new Group($item);
		}

		return $group;
	}

	/**
	 * Fetches a Group by the specified identifier.
	 * @param int $id The Group identifier.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Group
	 */
	public function retrieveGroup($id, QBankCachePolicy $cachePolicy = null) {
		return new Group($this->get('v1/accounts/groups/' . $id . '', [], $cachePolicy));
	}

	/**
	 * Lists all Roles available
	 * @param bool $includeDeleted Indicates if we should include removed Roles in the result.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Role[]
	 */
	public function listRoles($includeDeleted = false, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'includeDeleted'] = $includeDeleted;
		$role = array();
		foreach ($this->get('v1/accounts/roles', $query, $cachePolicy) as $item ) {
			$role[] = new Role($item);
		}

		return $role;
	}

	/**
	 * Fetches a Role by the specified identifier.
	 * @param int $id The Role identifier.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return Role
	 */
	public function retrieveRole($id, QBankCachePolicy $cachePolicy = null) {
		return new Role($this->get('v1/accounts/roles/' . $id . '', [], $cachePolicy));
	}

	/**
	 * Fetches all settings currently available for the current user.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return array
	 */
	public function listSettings(QBankCachePolicy $cachePolicy = null) {
		return $this->get('v1/accounts/settings', [], $cachePolicy);
	}

	/**
	 * Fetches a setting for the current user.
	 * @param string $key The key of the setting to fetch..
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return array
	 */
	public function retrieveSetting($key, QBankCachePolicy $cachePolicy = null) {
		return $this->get('v1/accounts/settings/' . $key . '', [], $cachePolicy);
	}

	/**
	 * Lists all Users available
	 * @param bool $includeDeleted Indicates if we should include removed Users in the result.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return User[]
	 */
	public function listUsers($includeDeleted = false, QBankCachePolicy $cachePolicy = null) {
		$query = array();
		$query[ 'includeDeleted'] = $includeDeleted;
		$user = array();
		foreach ($this->get('v1/accounts/users', $query, $cachePolicy) as $item ) {
			$user[] = new User($item);
		}

		return $user;
	}

	/**
	 * Fetches a User by the specified identifier.
	 * @param int $id The User identifier.
	 * @param QBankCachePolicy $cachePolicy Leaving cachePolicy null will use the default cache policy
	 * 
	 * @return User
	 */
	public function retrieveUser($id, QBankCachePolicy $cachePolicy = null) {
		return new User($this->get('v1/accounts/users/' . $id . '', [], $cachePolicy));
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