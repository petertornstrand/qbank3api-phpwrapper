<?php

namespace QBNK\QBank\API\Model;

use \DateTime;
use \Exception;


/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class User implements \JsonSerializable  {



	/**
	 * The User identifier.
	 * @var int
	 */
	protected $id;

	/**
	 * The full name of the User.
	 * @var string
	 */
	protected $name;

	/**
	 * Email-address of the User
	 * @var string
	 */
	protected $email;

	/**
	 * Optional last date this User can log in
	 * @var DateTime
	 */
	protected $endDate;

	/**
	 * Optional first date this user can start logging in
	 * @var DateTime
	 */
	protected $startDate;

	/**
	 * First name of the User
	 * @var string
	 */
	protected $firstName;

	/**
	 * Last name of the User
	 * @var string
	 */
	protected $lastName;

	/**
	 * Username for the User
	 * @var string
	 */
	protected $userName;

	/**
	 * Last login time of the User
	 * @var DateTime
	 */
	protected $lastLogin;

	/**
	 * An array of Groups this User is a member of (Note: this will be left as null when listing Users.
	 * @var Group
	 */
	protected $groups;

	/**
	 * Whether the User has been modified since constructed.
	 * @var boolean
	 */
	protected $dirty;

	/**
	 * Indicates if this User is deleted
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * When the User was created.
	 * @var DateTime
	 */
	protected $created;

	/**
	 * The User Id that created the User
	 * @var int
	 */
	protected $createdBy;

	/**
	 * When the User was updated.
	 * @var DateTime
	 */
	protected $updated;

	/**
	 * User Id that updated the User
	 * @var int
	 */
	protected $updatedBy;

	/**
	 * An array of Functionalities connected to this User
	 * @var Array
	 */
	protected $functionalities;

	/**
	 * An array of ExtraData connected to this User.
	 * @var Array
	 */
	protected $extraData;


	/**
	 * Constructs a {@link User }.
	 * @param array $parameters An array of parameters to initialize the {@link User } with.
	 * - <b>id</b> - The User identifier.
	 * - <b>name</b> - The full name of the User.
	 * - <b>email</b> - Email-address of the User
	 * - <b>endDate</b> - Optional last date this User can log in
	 * - <b>startDate</b> - Optional first date this user can start logging in
	 * - <b>firstName</b> - First name of the User
	 * - <b>lastName</b> - Last name of the User
	 * - <b>userName</b> - Username for the User
	 * - <b>lastLogin</b> - Last login time of the User
	 * - <b>groups</b> - An array of Groups this User is a member of (Note: this will be left as null when listing Users.
	 * - <b>dirty</b> - Whether the User has been modified since constructed.
	 * - <b>deleted</b> - Indicates if this User is deleted
	 * - <b>created</b> - When the User was created.
	 * - <b>createdBy</b> - The User Id that created the User
	 * - <b>updated</b> - When the User was updated.
	 * - <b>updatedBy</b> - User Id that updated the User
	 * - <b>functionalities</b> - An array of Functionalities connected to this User
	 * - <b>extraData</b> - An array of ExtraData connected to this User.
	 * 
	 */
	public function __construct($parameters) {
		
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['name'])) {
			$this->setName($parameters['name']);
		}
	
		if (isset($parameters['email'])) {
			$this->setEmail($parameters['email']);
		}
	
		if (isset($parameters['endDate'])) {
			$this->setEndDate($parameters['endDate']);
		}
	
		if (isset($parameters['startDate'])) {
			$this->setStartDate($parameters['startDate']);
		}
	
		if (isset($parameters['firstName'])) {
			$this->setFirstName($parameters['firstName']);
		}
	
		if (isset($parameters['lastName'])) {
			$this->setLastName($parameters['lastName']);
		}
	
		if (isset($parameters['userName'])) {
			$this->setUserName($parameters['userName']);
		}
	
		if (isset($parameters['lastLogin'])) {
			$this->setLastLogin($parameters['lastLogin']);
		}
	
		if (isset($parameters['groups'])) {
			$this->setGroups($parameters['groups']);
		}
	
		if (isset($parameters['dirty'])) {
			$this->setDirty($parameters['dirty']);
		}
	
		if (isset($parameters['deleted'])) {
			$this->setDeleted($parameters['deleted']);
		}
	
		if (isset($parameters['created'])) {
			$this->setCreated($parameters['created']);
		}
	
		if (isset($parameters['createdBy'])) {
			$this->setCreatedBy($parameters['createdBy']);
		}
	
		if (isset($parameters['updated'])) {
			$this->setUpdated($parameters['updated']);
		}
	
		if (isset($parameters['updatedBy'])) {
			$this->setUpdatedBy($parameters['updatedBy']);
		}
	
		if (isset($parameters['functionalities'])) {
			$this->setFunctionalities($parameters['functionalities']);
		}
	
		if (isset($parameters['extraData'])) {
			$this->setExtraData($parameters['extraData']);
		}
	
	}


	/**
	 * Gets the id of the User
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the name of the User
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the email of the User
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Gets the endDate of the User
	 * @return date
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Gets the startDate of the User
	 * @return date
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Gets the firstName of the User
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Gets the lastName of the User
	 * @return string
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Gets the userName of the User
	 * @return string
	 */
	public function getUserName() {
		return $this->userName;
	}

	/**
	 * Gets the lastLogin of the User
	 * @return date
	 */
	public function getLastLogin() {
		return $this->lastLogin;
	}

	/**
	 * Gets the groups of the User
	 * @return Group
	 */
	public function getGroups() {
		return $this->groups;
	}

	/**
	 * Gets the dirty of the User
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the deleted of the User
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets the created of the User
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the User
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the User
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the User
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the functionalities of the User
	 * @return Array
	 */
	public function getFunctionalities() {
		return $this->functionalities;
	}

	/**
	 * Gets the extraData of the User
	 * @return Array
	 */
	public function getExtraData() {
		return $this->extraData;
	}



	/**
	 * Sets the "id" of the User
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "name" of the User
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "email" of the User
	 * @param string $email
	 * @return $this
	 */
	protected function setEmail($email) {
		$this->email = $email;
		return $this;
	}

	/**
	 * Sets the "endDate" of the User
	 * @param DateTime $endDate
	 * @return $this
	 */
	protected function setEndDate($endDate) {
		if ($endDate instanceOf DateTime) {
			$this->endDate = $endDate;
		} else {
			try {
				$this->endDate = new DateTime($endDate);
			} catch (Exception $e) {
				$this->endDate = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "startDate" of the User
	 * @param DateTime $startDate
	 * @return $this
	 */
	protected function setStartDate($startDate) {
		if ($startDate instanceOf DateTime) {
			$this->startDate = $startDate;
		} else {
			try {
				$this->startDate = new DateTime($startDate);
			} catch (Exception $e) {
				$this->startDate = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "firstName" of the User
	 * @param string $firstName
	 * @return $this
	 */
	protected function setFirstName($firstName) {
		$this->firstName = $firstName;
		return $this;
	}

	/**
	 * Sets the "lastName" of the User
	 * @param string $lastName
	 * @return $this
	 */
	protected function setLastName($lastName) {
		$this->lastName = $lastName;
		return $this;
	}

	/**
	 * Sets the "userName" of the User
	 * @param string $userName
	 * @return $this
	 */
	protected function setUserName($userName) {
		$this->userName = $userName;
		return $this;
	}

	/**
	 * Sets the "lastLogin" of the User
	 * @param DateTime $lastLogin
	 * @return $this
	 */
	protected function setLastLogin($lastLogin) {
		if ($lastLogin instanceOf DateTime) {
			$this->lastLogin = $lastLogin;
		} else {
			try {
				$this->lastLogin = new DateTime($lastLogin);
			} catch (Exception $e) {
				$this->lastLogin = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "groups" of the User
	 * @param Group $groups
	 * @return $this
	 */
	protected function setGroups($groups) {
		if ($groups instanceof Group) {
			$this->groups = $groups;
		} else if (is_array($groups)) {
			$this->groups = new Group($groups);
		} else {
			$this->groups = null;
			trigger_error('Argument must be an object of class Group. Data loss!', E_USER_WARNING);
		}
		return $this;
	}

	/**
	 * Sets the "dirty" of the User
	 * @param boolean $dirty
	 * @return $this
	 */
	protected function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "deleted" of the User
	 * @param boolean $deleted
	 * @return $this
	 */
	protected function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "created" of the User
	 * @param DateTime $created
	 * @return $this
	 */
	protected function setCreated($created) {
		if ($created instanceOf DateTime) {
			$this->created = $created;
		} else {
			try {
				$this->created = new DateTime($created);
			} catch (Exception $e) {
				$this->created = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "createdBy" of the User
	 * @param int $createdBy
	 * @return $this
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the User
	 * @param DateTime $updated
	 * @return $this
	 */
	protected function setUpdated($updated) {
		if ($updated instanceOf DateTime) {
			$this->updated = $updated;
		} else {
			try {
				$this->updated = new DateTime($updated);
			} catch (Exception $e) {
				$this->updated = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "updatedBy" of the User
	 * @param int $updatedBy
	 * @return $this
	 */
	protected function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "functionalities" of the User
	 * @param Functionality[] $functionalities
	 * @return $this
	 */
	protected function setFunctionalities($functionalities) {
		if (is_array($functionalities)) {
			$this->functionalities = array();
			foreach ($functionalities as $item) {
				if (!($item instanceof Functionality)) {
					trigger_error('Array parameter item is not of expected type "Functionality"!', E_USER_WARNING);
					continue;
				}
				$this->functionalities[] = new Functionality($item);
			}
		}
		return $this;
	}

	/**
	 * Sets the "extraData" of the User
	 * @param ExtraData[] $extraData
	 * @return $this
	 */
	protected function setExtraData($extraData) {
		if (is_array($extraData)) {
			$this->extraData = array();
			foreach ($extraData as $item) {
				if (!($item instanceof ExtraData)) {
					trigger_error('Array parameter item is not of expected type "ExtraData"!', E_USER_WARNING);
					continue;
				}
				$this->extraData[] = new ExtraData($item);
			}
		}
		return $this;
	}


	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->id !== null) {
			$array['id'] = $this->id;
		}
		if ($this->name !== null) {
			$array['name'] = $this->name;
		}
		if ($this->email !== null) {
			$array['email'] = $this->email;
		}
		if ($this->endDate !== null) {
			$array['endDate'] = $this->endDate;
		}
		if ($this->startDate !== null) {
			$array['startDate'] = $this->startDate;
		}
		if ($this->firstName !== null) {
			$array['firstName'] = $this->firstName;
		}
		if ($this->lastName !== null) {
			$array['lastName'] = $this->lastName;
		}
		if ($this->userName !== null) {
			$array['userName'] = $this->userName;
		}
		if ($this->lastLogin !== null) {
			$array['lastLogin'] = $this->lastLogin;
		}
		if ($this->groups !== null) {
			$array['groups'] = $this->groups;
		}
		if ($this->dirty !== null) {
			$array['dirty'] = $this->dirty;
		}
		if ($this->deleted !== null) {
			$array['deleted'] = $this->deleted;
		}
		if ($this->created !== null) {
			$array['created'] = $this->created;
		}
		if ($this->createdBy !== null) {
			$array['createdBy'] = $this->createdBy;
		}
		if ($this->updated !== null) {
			$array['updated'] = $this->updated;
		}
		if ($this->updatedBy !== null) {
			$array['updatedBy'] = $this->updatedBy;
		}
		if ($this->functionalities !== null) {
			$array['functionalities'] = $this->functionalities;
		}
		if ($this->extraData !== null) {
			$array['extraData'] = $this->extraData;
		}
		return $array;
	}
}