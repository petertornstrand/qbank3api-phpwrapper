<?php

namespace QBNK\QBank\API\Model;

class DeploymentSite  implements \JsonSerializable
{
    /** @var string The human readable description of the DeploymentSite. */
    protected $description;

    /** @var Protocol The Protocol used to deploy to the DeploymentSite. */
    protected $protocol;

    /** @var object A key-value object with the Protocol specific values. */
    protected $definition;

    /** @var string The domain name of the server for the DeploymentSite. */
    protected $viewserver;

    /** @var string The url path to were files are accessible for the DeploymentSite. */
    protected $viewpath;

    /** @var string The pattern used for naming the files. */
    protected $namingpattern;

    /** @var bool Whether grouped Media should be deployed. */
    protected $children;

    /** @var string The color associated with the DeploymentSite as a #-prepended hexadecimal string. */
    protected $color;

    /** @var ImageTemplate[] The connected ImageTemplates. */
    protected $imagetemplates;

    /** @var VideoTemplate[] The connected VideoTemplates. */
    protected $videotemplates;

    /** @var Category[] The connected Categories. */
    protected $categories;

    /** @var string The Objects name. */
    protected $name;

    /** @var bool Whether the object is deleted. */
    protected $deleted;

    /** @var string[] A systemName => value array of properties. This is only used when updating an object. See the "propertySets" parameter for complete properties when fetching an object. */
    protected $properties;

    /** @var int The identifier of the ObjectType describing the propertysets this object should use. */
    protected $typeId;

    /**
     * Constructs a DeploymentSite.
     *
     * @param array $parameters An array of parameters to initialize the {@link DeploymentSite} with.
     * - <b>description</b> - The human readable description of the DeploymentSite.
     * - <b>protocol</b> - The Protocol used to deploy to the DeploymentSite.
     * - <b>definition</b> - A key-value object with the Protocol specific values.
     * - <b>viewserver</b> - The domain name of the server for the DeploymentSite.
     * - <b>viewpath</b> - The url path to were files are accessible for the DeploymentSite.
     * - <b>namingpattern</b> - The pattern used for naming the files.
     * - <b>children</b> - Whether grouped Media should be deployed.
     * - <b>color</b> - The color associated with the DeploymentSite as a #-prepended hexadecimal string.
     * - <b>imagetemplates</b> - The connected ImageTemplates.
     * - <b>videotemplates</b> - The connected VideoTemplates.
     * - <b>categories</b> - The connected Categories.
     * - <b>name</b> - The Objects name.
     * - <b>deleted</b> - Whether the object is deleted.
     * - <b>properties</b> - A systemName => value array of properties. This is only used when updating an object. See the "propertySets" parameter for complete properties when fetching an object.
     * - <b>typeId</b> - The identifier of the ObjectType describing the propertysets this object should use.
     */
    public function __construct($parameters = [])
    {
        $this->imagetemplates = [];
        $this->videotemplates = [];
        $this->categories     = [];
        $this->properties     = [];

        if (isset($parameters['description'])) {
            $this->setDescription($parameters['description']);
        }
        if (isset($parameters['protocol'])) {
            $this->setProtocol($parameters['protocol']);
        }
        if (isset($parameters['definition'])) {
            $this->setDefinition($parameters['definition']);
        }
        if (isset($parameters['viewserver'])) {
            $this->setViewserver($parameters['viewserver']);
        }
        if (isset($parameters['viewpath'])) {
            $this->setViewpath($parameters['viewpath']);
        }
        if (isset($parameters['namingpattern'])) {
            $this->setNamingpattern($parameters['namingpattern']);
        }
        if (isset($parameters['children'])) {
            $this->setChildren($parameters['children']);
        }
        if (isset($parameters['color'])) {
            $this->setColor($parameters['color']);
        }
        if (isset($parameters['imagetemplates'])) {
            $this->setImagetemplates($parameters['imagetemplates']);
        }
        if (isset($parameters['videotemplates'])) {
            $this->setVideotemplates($parameters['videotemplates']);
        }
        if (isset($parameters['categories'])) {
            $this->setCategories($parameters['categories']);
        }
        if (isset($parameters['name'])) {
            $this->setName($parameters['name']);
        }
        if (isset($parameters['deleted'])) {
            $this->setDeleted($parameters['deleted']);
        }
        if (isset($parameters['properties'])) {
            $this->setProperties($parameters['properties']);
        }
        if (isset($parameters['typeId'])) {
            $this->setTypeId($parameters['typeId']);
        }
    }

    /**
     * Gets the description of the DeploymentSite.
     * @return string	 */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the "description" of the DeploymentSite.
     *
     * @param string $description
     *
     * @return DeploymentSite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * Gets the protocol of the DeploymentSite.
     * @return Protocol	 */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Sets the "protocol" of the DeploymentSite.
     *
     * @param Protocol $protocol
     *
     * @return DeploymentSite
     */
    public function setProtocol($protocol)
    {
        if ($protocol instanceof Protocol) {
            $this->protocol = $protocol;
        } elseif (is_array($protocol)) {
            $this->protocol = new Protocol($protocol);
        } else {
            $this->protocol = null;
            trigger_error('Argument must be an object of class Protocol. Data loss!', E_USER_WARNING);
        }

        return $this;
    }
    /**
     * Gets the definition of the DeploymentSite.
     * @return object	 */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets the "definition" of the DeploymentSite.
     *
     * @param array|string $definition
     *
     * @return DeploymentSite
     */
    public function setDefinition($definition)
    {
        if (is_array($definition)) {
            $this->definition = $definition;

            return $this;
        }
        $this->definition = json_decode($definition, true);
        if ($this->definition === null) {
            $this->definition = $definition;
        }

        return $this;
    }
    /**
     * Gets the viewserver of the DeploymentSite.
     * @return string	 */
    public function getViewserver()
    {
        return $this->viewserver;
    }

    /**
     * Sets the "viewserver" of the DeploymentSite.
     *
     * @param string $viewserver
     *
     * @return DeploymentSite
     */
    public function setViewserver($viewserver)
    {
        $this->viewserver = $viewserver;

        return $this;
    }
    /**
     * Gets the viewpath of the DeploymentSite.
     * @return string	 */
    public function getViewpath()
    {
        return $this->viewpath;
    }

    /**
     * Sets the "viewpath" of the DeploymentSite.
     *
     * @param string $viewpath
     *
     * @return DeploymentSite
     */
    public function setViewpath($viewpath)
    {
        $this->viewpath = $viewpath;

        return $this;
    }
    /**
     * Gets the namingpattern of the DeploymentSite.
     * @return string	 */
    public function getNamingpattern()
    {
        return $this->namingpattern;
    }

    /**
     * Sets the "namingpattern" of the DeploymentSite.
     *
     * @param string $namingpattern
     *
     * @return DeploymentSite
     */
    public function setNamingpattern($namingpattern)
    {
        $this->namingpattern = $namingpattern;

        return $this;
    }
    /**
     * Tells whether the DeploymentSite is children.
     * @return bool	 */
    public function isChildren()
    {
        return $this->children;
    }

    /**
     * Sets the "children" of the DeploymentSite.
     *
     * @param bool $children
     *
     * @return DeploymentSite
     */
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }
    /**
     * Gets the color of the DeploymentSite.
     * @return string	 */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets the "color" of the DeploymentSite.
     *
     * @param string $color
     *
     * @return DeploymentSite
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
    /**
     * Gets the imagetemplates of the DeploymentSite.
     * @return ImageTemplate[]	 */
    public function getImagetemplates()
    {
        return $this->imagetemplates;
    }

    /**
     * Sets the "imagetemplates" of the DeploymentSite.
     *
     * @param ImageTemplate[] $imagetemplates
     *
     * @return DeploymentSite
     */
    public function setImagetemplates(array $imagetemplates)
    {
        $this->imagetemplates = [];

        foreach ($imagetemplates as $item) {
            $this->addImageTemplate($item);
        }

        return $this;
    }

    /**
     * Adds an object of "Imagetemplates" of the DeploymentSite.
     *
     * @param ImageTemplate|array $item
     *
     * @return DeploymentSite
     */
    public function addImageTemplate($item)
    {
        if (!($item instanceof ImageTemplate)) {
            if (is_array($item)) {
                try {
                    $item = new ImageTemplate($item);
                } catch (\Exception $e) {
                    trigger_error('Could not auto-instantiate ImageTemplate. '.$e->getMessage(), E_USER_WARNING);
                }
            } else {
                trigger_error('Array parameter item is not of expected type "ImageTemplate"!', E_USER_WARNING);
            }
        }
        $this->imagetemplates[] = $item;

        return $this;
    }
    /**
     * Gets the videotemplates of the DeploymentSite.
     * @return VideoTemplate[]	 */
    public function getVideotemplates()
    {
        return $this->videotemplates;
    }

    /**
     * Sets the "videotemplates" of the DeploymentSite.
     *
     * @param VideoTemplate[] $videotemplates
     *
     * @return DeploymentSite
     */
    public function setVideotemplates(array $videotemplates)
    {
        $this->videotemplates = [];

        foreach ($videotemplates as $item) {
            $this->addVideoTemplate($item);
        }

        return $this;
    }

    /**
     * Adds an object of "Videotemplates" of the DeploymentSite.
     *
     * @param VideoTemplate|array $item
     *
     * @return DeploymentSite
     */
    public function addVideoTemplate($item)
    {
        if (!($item instanceof VideoTemplate)) {
            if (is_array($item)) {
                try {
                    $item = new VideoTemplate($item);
                } catch (\Exception $e) {
                    trigger_error('Could not auto-instantiate VideoTemplate. '.$e->getMessage(), E_USER_WARNING);
                }
            } else {
                trigger_error('Array parameter item is not of expected type "VideoTemplate"!', E_USER_WARNING);
            }
        }
        $this->videotemplates[] = $item;

        return $this;
    }
    /**
     * Gets the categories of the DeploymentSite.
     * @return Category[]	 */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the "categories" of the DeploymentSite.
     *
     * @param Category[] $categories
     *
     * @return DeploymentSite
     */
    public function setCategories(array $categories)
    {
        $this->categories = [];

        foreach ($categories as $item) {
            $this->addCategory($item);
        }

        return $this;
    }

    /**
     * Adds an object of "Categories" of the DeploymentSite.
     *
     * @param Category|array $item
     *
     * @return DeploymentSite
     */
    public function addCategory($item)
    {
        if (!($item instanceof Category)) {
            if (is_array($item)) {
                try {
                    $item = new Category($item);
                } catch (\Exception $e) {
                    trigger_error('Could not auto-instantiate Category. '.$e->getMessage(), E_USER_WARNING);
                }
            } else {
                trigger_error('Array parameter item is not of expected type "Category"!', E_USER_WARNING);
            }
        }
        $this->categories[] = $item;

        return $this;
    }
    /**
     * Gets the name of the DeploymentSite.
     * @return string	 */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the "name" of the DeploymentSite.
     *
     * @param string $name
     *
     * @return DeploymentSite
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Tells whether the DeploymentSite is deleted.
     * @return bool	 */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Sets the "deleted" of the DeploymentSite.
     *
     * @param bool $deleted
     *
     * @return DeploymentSite
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }
    /**
     * Gets the properties of the DeploymentSite.
     * @return string[]	 */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Sets the "properties" of the DeploymentSite.
     *
     * @param string[] $properties
     *
     * @return DeploymentSite
     */
    public function setProperties(array $properties)
    {
        $this->properties = $properties;

        return $this;
    }
    /**
     * Gets the typeId of the DeploymentSite.
     * @return int	 */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Sets the "typeId" of the DeploymentSite.
     *
     * @param int $typeId
     *
     * @return DeploymentSite
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

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

        if ($this->description !== null) {
            $json['description'] = $this->description;
        }
        if ($this->protocol !== null) {
            $json['protocol'] = $this->protocol;
        }
        if ($this->definition !== null) {
            $json['definition'] = $this->definition;
        }
        if ($this->viewserver !== null) {
            $json['viewserver'] = $this->viewserver;
        }
        if ($this->viewpath !== null) {
            $json['viewpath'] = $this->viewpath;
        }
        if ($this->namingpattern !== null) {
            $json['namingpattern'] = $this->namingpattern;
        }
        if ($this->children !== null) {
            $json['children'] = $this->children;
        }
        if ($this->color !== null) {
            $json['color'] = $this->color;
        }
        if ($this->imagetemplates !== null && !empty($this->imagetemplates)) {
            $json['imagetemplates'] = $this->imagetemplates;
        }
        if ($this->videotemplates !== null && !empty($this->videotemplates)) {
            $json['videotemplates'] = $this->videotemplates;
        }
        if ($this->categories !== null && !empty($this->categories)) {
            $json['categories'] = $this->categories;
        }
        if ($this->name !== null) {
            $json['name'] = $this->name;
        }
        if ($this->deleted !== null) {
            $json['deleted'] = $this->deleted;
        }
        if ($this->properties !== null && !empty($this->properties)) {
            $json['properties'] = $this->properties;
        }
        if ($this->typeId !== null) {
            $json['typeId'] = $this->typeId;
        }

        return $json;
    }
}
