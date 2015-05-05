<?php

namespace QBNK\QBank\API\Controller;

	use QBNK\QBank\API\Model\Functionality;
	use QBNK\QBank\API\CachePolicy;
	use QBNK\QBank\API\Model\Group;
	use QBNK\QBank\API\Model\Role;
	use QBNK\QBank\API\Model\User;


class AccountsController extends ControllerAbstract {

		/**
	 * Lists Functionalities available
 * 
 * Lists all Functionalities available
		 * @param bool $includeDeleted Indicates if we should include removed Functionalities in the result.
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return Functionality[]
	 */
	public function listFunctionalities($includeDeleted = false, CachePolicy $cachePolicy = null) {
		
																					$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/functionalities', $parameters, $cachePolicy);
					foreach ($result as &$entry) {
				$entry = new Functionality($entry);
			}
			unset($entry);
			reset($result);
						return $result;
	}
		/**
	 * Fetches a specific Functionality.
 * 
 * Fetches a Functionality by the specified identifier.
		 * @param int $id The Functionality identifier.
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return Functionality
	 */
	public function retrieveFunctionality($id, CachePolicy $cachePolicy = null) {
		
																					$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/functionalities/'.$id.'', $parameters, $cachePolicy);
							$result = new Functionality($result);
				return $result;
	}
		/**
	 * Lists Groups available
 * 
 * Lists all Groups available
		 * @param bool $includeDeleted Indicates if we should include removed Groups in the result.
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return Group[]
	 */
	public function listGroups($includeDeleted = false, CachePolicy $cachePolicy = null) {
		
																					$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/groups', $parameters, $cachePolicy);
					foreach ($result as &$entry) {
				$entry = new Group($entry);
			}
			unset($entry);
			reset($result);
						return $result;
	}
		/**
	 * Fetches a specific Group.
 * 
 * Fetches a Group by the specified identifier.
		 * @param int $id The Group identifier.
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return Group
	 */
	public function retrieveGroup($id, CachePolicy $cachePolicy = null) {
		
																					$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/groups/'.$id.'', $parameters, $cachePolicy);
							$result = new Group($result);
				return $result;
	}
		/**
	 * Lists Roles available
 * 
 * Lists all Roles available
		 * @param bool $includeDeleted Indicates if we should include removed Roles in the result.
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return Role[]
	 */
	public function listRoles($includeDeleted = false, CachePolicy $cachePolicy = null) {
		
																					$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/roles', $parameters, $cachePolicy);
					foreach ($result as &$entry) {
				$entry = new Role($entry);
			}
			unset($entry);
			reset($result);
						return $result;
	}
		/**
	 * Fetches a specific Role.
 * 
 * Fetches a Role by the specified identifier.
		 * @param int $id The Role identifier.
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return Role
	 */
	public function retrieveRole($id, CachePolicy $cachePolicy = null) {
		
																					$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/roles/'.$id.'', $parameters, $cachePolicy);
							$result = new Role($result);
				return $result;
	}
		/**
	 * Fetches all settings.
 * 
 * Fetches all settings currently available for the current user.
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return array
	 */
	public function listSettings(, CachePolicy $cachePolicy = null) {
		
										$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/settings', $parameters, $cachePolicy);
						return $result;
	}
		/**
	 * Fetches a setting.
 * 
 * Fetches a setting for the current user.
		 * @param string $key The key of the setting to fetch..
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return array
	 */
	public function retrieveSetting($key, CachePolicy $cachePolicy = null) {
		
																					$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/settings/'.$key.'', $parameters, $cachePolicy);
						return $result;
	}
		/**
	 * Lists Users available
 * 
 * Lists all Users available
		 * @param bool $includeDeleted Indicates if we should include removed Users in the result.
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return User[]
	 */
	public function listUsers($includeDeleted = false, CachePolicy $cachePolicy = null) {
		
																					$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/users', $parameters, $cachePolicy);
					foreach ($result as &$entry) {
				$entry = new User($entry);
			}
			unset($entry);
			reset($result);
						return $result;
	}
		/**
	 * Fetches a specific User.
 * 
 * Fetches a User by the specified identifier.
		 * @param int $id The User identifier.
			 * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
	 	 * @return User
	 */
	public function retrieveUser($id, CachePolicy $cachePolicy = null) {
		
																					$parameters = [
			'query' => [],
			'body' => json_encode([]),
			'headers' => []
		];
		$result = $this->get('v1/accounts/users/'.$id.'', $parameters, $cachePolicy);
							$result = new User($result);
				return $result;
	}
		/**
	 * Creates a new setting.
 * 
 * Creates a new, previously not existing setting.
		 * @param string $key The key (identifier) of the setting
		 * @param string $value The value of the setting
			 * 
	 */
	public function createSetting($key, $value) {
		
																																														$parameters = [
			'query' => [],
			'body' => json_encode(['key' => $key, 'value' => $value, ]),
			'headers' => []
		];
		$result = $this->post('v1/accounts/settings', $parameters);
						return $result;
	}
		/**
	 * Updates an existing setting.
 * 
 * Updates a previously created setting.
		 * @param string $key The key (identifier) of the setting..
		 * @param string $value The value of the setting
			 * 
	 */
	public function updateSetting($key, $value) {
		
																																							$parameters = [
			'query' => [],
			'body' => json_encode(['value' => $value, ]),
			'headers' => []
		];
		$result = $this->put('v1/accounts/settings/'.$key.'', $parameters);
						return $result;
	}
	}