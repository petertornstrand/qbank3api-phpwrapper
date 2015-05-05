<?php

namespace QBNK\QBank\API\Model;

use The;

    class Command  implements \JsonSerializable
    {
    /** @var The name of the command */
    protected $class;

    /**
     * Constructs a Command.
     *
     * @param array $parameters An array of parameters to initialize the { @link Command } with.
     * - <b>class</b> - name of the command
     */
    public function __construct($parameters = [])
    {
        if (isset($parameters['class'])) {
            $this->setClass($parameters['class']);
        }
    }

    /**
     * Gets the class of the Command.
     * @return The	 */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets the "class" of the Command.
     *
     * @param The $class
     *
     * @return Command
     */
    public function setClass($class)
    {
        if ($class instanceof The) {
            $this->class = $class;
        } elseif (is_array($class)) {
            $this->class = new The($class);
        } else {
            $this->class = null;
            trigger_error('Argument must be an object of class The. Data loss!', E_USER_WARNING);
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

        if ($this->class !== null) {
            $json['class'] = $this->class;
        }

        return $json;
    }
    }
