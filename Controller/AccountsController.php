<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\Functionality;
use QBNK\QBank\API\Model\Group;
use QBNK\QBank\API\Model\Role;
use QBNK\QBank\API\Model\User;

class AccountsController extends ControllerAbstract
{
    /**
     * Lists Functionalities available.
     *
     * Lists all Functionalities available
     *
     * @param bool $includeDeleted Indicates if we should include removed Functionalities in the result.
     *
     * @return Functionality[]
     */
    public function listFunctionalities($includeDeleted = false)
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/functionalities', $parameters);
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
     *
     * @param int $id The Functionality identifier.
     *
     * @return Functionality
     */
    public function retrieveFunctionality($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/functionalities/'.$id.'', $parameters);
        $result = new Functionality($result);

        return $result;
    }
    /**
     * Lists Groups available.
     *
     * Lists all Groups available
     *
     * @param bool $includeDeleted Indicates if we should include removed Groups in the result.
     *
     * @return Group[]
     */
    public function listGroups($includeDeleted = false)
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/groups', $parameters);
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
     *
     * @param int $id The Group identifier.
     *
     * @return Group
     */
    public function retrieveGroup($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/groups/'.$id.'', $parameters);
        $result = new Group($result);

        return $result;
    }
    /**
     * Lists Roles available.
     *
     * Lists all Roles available
     *
     * @param bool $includeDeleted Indicates if we should include removed Roles in the result.
     *
     * @return Role[]
     */
    public function listRoles($includeDeleted = false)
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/roles', $parameters);
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
     *
     * @param int $id The Role identifier.
     *
     * @return Role
     */
    public function retrieveRole($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/roles/'.$id.'', $parameters);
        $result = new Role($result);

        return $result;
    }
    /**
     * Fetches all settings.
     *
     * Fetches all settings currently available for the current user.
     *
     * @return array
     */
    public function listSettings()
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/settings', $parameters);

        return $result;
    }
    /**
     * Fetches a setting.
     *
     * Fetches a setting for the current user.
     *
     * @param string $key The key of the setting to fetch..
     *
     * @return array
     */
    public function retrieveSetting($key)
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/settings/'.$key.'', $parameters);

        return $result;
    }
    /**
     * Lists Users available.
     *
     * Lists all Users available
     *
     * @param bool $includeDeleted Indicates if we should include removed Users in the result.
     *
     * @return User[]
     */
    public function listUsers($includeDeleted = false)
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/users', $parameters);
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
     *
     * @param int $id The User identifier.
     *
     * @return User
     */
    public function retrieveUser($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/accounts/users/'.$id.'', $parameters);
        $result = new User($result);

        return $result;
    }
    /**
     * Creates a new setting.
     *
     * Creates a new, previously not existing setting.
     *
     * @param string $key The key (identifier) of the setting
     * @param string $value The value of the setting
     */
    public function createSetting($key, $value)
    {
        $parameters = [
            'query'   => [],
            'body'    => ['key' => $key, 'value' => $value],
            'headers' => [],
        ];
        $result = $this->post('v1/accounts/settings', $parameters);

        return $result;
    }
    /**
     * Updates an existing setting.
     *
     * Updates a previously created setting.
     *
     * @param string $key The key (identifier) of the setting..
     * @param string $value The value of the setting
     */
    public function updateSetting($key, $value)
    {
        $parameters = [
            'query'   => [],
            'body'    => ['value' => $value],
            'headers' => [],
        ];
        $result = $this->put('v1/accounts/settings/'.$key.'', $parameters);

        return $result;
    }
}
