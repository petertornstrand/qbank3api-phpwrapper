<?php

namespace QBNK\QBank\API\Model;

use DateTime;

class Group  implements \JsonSerializable
{
    /**
     * The Group identifier.
     * @val int	 */
    protected $id;
    /**
     * The name of the Group.
     * @val string	 */
    protected $name;
    /**
     * Description of what this Group means.
     * @val string	 */
    protected $description;
    /**
     * Whether the object has been modified since constructed.
     * @val bool	 */
    protected $dirty;
    /**
     * Indicates if this Group is deleted.
     * @val bool	 */
    protected $deleted;
    /**
     * When the Group was created.
     * @val DateTime	 */
    protected $created;
    /**
     * The User Id that created the Group.
     * @val int	 */
    protected $createdBy;
    /**
     * When the Group was updated.
     * @val DateTime	 */
    protected $updated;
    /**
     * User Id that updated the Group.
     * @val int	 */
    protected $updatedBy;
    /**
     * An array of Functionalities connected to this Group.
     * @val Functionality[]	 */
    protected $functionalities;
    /**
     * An array of Roles connected to this Group.
     * @val Role[]	 */
    protected $roles;
    /**
     * An array of ExtraData connected to this Group.
     * @val ExtraData[]	 */
    protected $extraData;

    /**
     * Constructs a Group.
     *
     * @param array $parameters An array of parameters to initialize the { @link Group } with.
     * - <b>id</b> - The Group identifier.
     * - <b>name</b> - The name of the Group
     * - <b>description</b> - Description of what this Group means
     * - <b>dirty</b> - Whether the object has been modified since constructed.
     * - <b>deleted</b> - Indicates if this Group is deleted
     * - <b>created</b> - When the Group was created.
     * - <b>createdBy</b> - The User Id that created the Group
     * - <b>updated</b> - When the Group was updated.
     * - <b>updatedBy</b> - User Id that updated the Group
     * - <b>functionalities</b> - An array of Functionalities connected to this Group
     * - <b>roles</b> - An array of Roles connected to this Group
     * - <b>extraData</b> - An array of ExtraData connected to this Group.
     */
    public function __construct($parameters = [])
    {
        $this->functionalities = [];
        $this->roles           = [];
        $this->extraData       = [];

        if (isset($parameters['id'])) {
            $this->setId($parameters['id']);
        }
        if (isset($parameters['name'])) {
            $this->setName($parameters['name']);
        }
        if (isset($parameters['description'])) {
            $this->setDescription($parameters['description']);
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
        if (isset($parameters['roles'])) {
            $this->setRoles($parameters['roles']);
        }
        if (isset($parameters['extraData'])) {
            $this->setExtraData($parameters['extraData']);
        }
    }

    /**
     * Gets the id of the Group.
     * @return int	 */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the "id" of the Group.
     *
     * @param int $id
     *
     * @return Group
     */
    public function setId($id)
    {
        $this->id =  $id;

        return $this;
    }
    /**
     * Gets the name of the Group.
     * @return string	 */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the "name" of the Group.
     *
     * @param string $name
     *
     * @return Group
     */
    public function setName($name)
    {
        $this->name =  $name;

        return $this;
    }
    /**
     * Gets the description of the Group.
     * @return string	 */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the "description" of the Group.
     *
     * @param string $description
     *
     * @return Group
     */
    public function setDescription($description)
    {
        $this->description =  $description;

        return $this;
    }
    /**
     * Tells whether the Group is dirty.
     * @return bool	 */
    public function isDirty()
    {
        return $this->dirty;
    }

    /**
     * Sets the "dirty" of the Group.
     *
     * @param bool $dirty
     *
     * @return Group
     */
    public function setDirty($dirty)
    {
        $this->dirty =  $dirty;

        return $this;
    }
    /**
     * Tells whether the Group is deleted.
     * @return bool	 */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Sets the "deleted" of the Group.
     *
     * @param bool $deleted
     *
     * @return Group
     */
    public function setDeleted($deleted)
    {
        $this->deleted =  $deleted;

        return $this;
    }
    /**
     * Gets the created of the Group.
     * @return DateTime	 */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets the "created" of the Group.
     *
     * @param DateTime $created
     *
     * @return Group
     */
    public function setCreated($created)
    {
        if ($created instanceof DateTime) {
            $this->created = $created;
        } else {
            try {
                $this->created = new DateTime($created);
            } catch (\Exception $e) {
                $this->created = null;
            }
        }

        return $this;
    }
    /**
     * Gets the createdBy of the Group.
     * @return int	 */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets the "createdBy" of the Group.
     *
     * @param int $createdBy
     *
     * @return Group
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy =  $createdBy;

        return $this;
    }
    /**
     * Gets the updated of the Group.
     * @return DateTime	 */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Sets the "updated" of the Group.
     *
     * @param DateTime $updated
     *
     * @return Group
     */
    public function setUpdated($updated)
    {
        if ($updated instanceof DateTime) {
            $this->updated = $updated;
        } else {
            try {
                $this->updated = new DateTime($updated);
            } catch (\Exception $e) {
                $this->updated = null;
            }
        }

        return $this;
    }
    /**
     * Gets the updatedBy of the Group.
     * @return int	 */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Sets the "updatedBy" of the Group.
     *
     * @param int $updatedBy
     *
     * @return Group
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy =  $updatedBy;

        return $this;
    }
    /**
     * Gets the functionalities of the Group.
     * @return Functionality[]	 */
    public function getFunctionalities()
    {
        return $this->functionalities;
    }

    /**
     * Sets the "functionalities" of the Group.
     *
     * @param Functionality[] $functionalities
     *
     * @return Group
     */
    public function setFunctionalities($functionalities)
    {
        if (is_array($functionalities)) {
            $this->functionalities = [];
            foreach ($functionalities as $item) {
                if (!($item instanceof Functionality)) {
                    if (is_array($item)) {
                        try {
                            $item = new Functionality($item);
                        } catch (\Exception $e) {
                            trigger_error('Could not auto-instantiate Functionality. '.$e->getMessage(), E_USER_WARNING);
                        }
                    } else {
                        trigger_error('Array parameter item is not of expected type "Functionality"!', E_USER_WARNING);
                        continue;
                    }
                }
                $this->functionalities[] = $item;
            }
        }

        return $this;
    }
    /**
     * Gets the roles of the Group.
     * @return Role[]	 */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Sets the "roles" of the Group.
     *
     * @param Role[] $roles
     *
     * @return Group
     */
    public function setRoles($roles)
    {
        if (is_array($roles)) {
            $this->roles = [];
            foreach ($roles as $item) {
                if (!($item instanceof Role)) {
                    if (is_array($item)) {
                        try {
                            $item = new Role($item);
                        } catch (\Exception $e) {
                            trigger_error('Could not auto-instantiate Role. '.$e->getMessage(), E_USER_WARNING);
                        }
                    } else {
                        trigger_error('Array parameter item is not of expected type "Role"!', E_USER_WARNING);
                        continue;
                    }
                }
                $this->roles[] = $item;
            }
        }

        return $this;
    }
    /**
     * Gets the extraData of the Group.
     * @return ExtraData[]	 */
    public function getExtraData()
    {
        return $this->extraData;
    }

    /**
     * Sets the "extraData" of the Group.
     *
     * @param ExtraData[] $extraData
     *
     * @return Group
     */
    public function setExtraData($extraData)
    {
        if (is_array($extraData)) {
            $this->extraData = [];
            foreach ($extraData as $item) {
                if (!($item instanceof ExtraData)) {
                    if (is_array($item)) {
                        try {
                            $item = new ExtraData($item);
                        } catch (\Exception $e) {
                            trigger_error('Could not auto-instantiate ExtraData. '.$e->getMessage(), E_USER_WARNING);
                        }
                    } else {
                        trigger_error('Array parameter item is not of expected type "ExtraData"!', E_USER_WARNING);
                        continue;
                    }
                }
                $this->extraData[] = $item;
            }
        }

        return $this;
    }

    /**
     * Gets all data that should be available in a json representation.
     *
     * @return array An associative array of the available variables.
     */
    public function jsonSerialize()
    {
        $json = [];

        if ($this->id !== null) {
            $json['id'] = $this->id;
        }
        if ($this->name !== null) {
            $json['name'] = $this->name;
        }
        if ($this->description !== null) {
            $json['description'] = $this->description;
        }
        if ($this->dirty !== null) {
            $json['dirty'] = $this->dirty;
        }
        if ($this->deleted !== null) {
            $json['deleted'] = $this->deleted;
        }
        if ($this->created !== null) {
            $json['created'] = $this->created;
        }
        if ($this->createdBy !== null) {
            $json['createdBy'] = $this->createdBy;
        }
        if ($this->updated !== null) {
            $json['updated'] = $this->updated;
        }
        if ($this->updatedBy !== null) {
            $json['updatedBy'] = $this->updatedBy;
        }
        if ($this->functionalities !== null && !empty($this->functionalities)) {
            $json['functionalities'] = $this->functionalities;
        }
        if ($this->roles !== null && !empty($this->roles)) {
            $json['roles'] = $this->roles;
        }
        if ($this->extraData !== null && !empty($this->extraData)) {
            $json['extraData'] = $this->extraData;
        }

        return $json;
    }
}
