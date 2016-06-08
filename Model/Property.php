<?php

namespace QBNK\QBank\API\Model;

class Property  implements \JsonSerializable
{
    const TEMPLATE_IMAGE = 'image';
    const TEMPLATE_VIDEO = 'video';

    /** @var string The system name of the Property we filter on */
    protected $systemName;

    /** @var string The value we filter by */
    protected $value;

    /**
     * Constructs a Property.
     *
     * @param array $parameters An array of parameters to initialize the {@link Property} with.
     * - <b>systemName</b> - The system name of the Property we filter on
     * - <b>value</b> - The value we filter by
     */
    public function __construct($parameters = [])
    {
        if (isset($parameters['systemName'])) {
            $this->setSystemName($parameters['systemName']);
        }
        if (isset($parameters['value'])) {
            $this->setValue($parameters['value']);
        }
    }

    /**
     * Gets the systemName of the Property.
     * @return string	 */
    public function getSystemName()
    {
        return $this->systemName;
    }

    /**
     * Sets the "systemName" of the Property.
     *
     * @param string $systemName
     *
     * @return Property
     */
    public function setSystemName($systemName)
    {
        $this->systemName = $systemName;

        return $this;
    }
    /**
     * Gets the value of the Property.
     * @return string	 */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the "value" of the Property.
     *
     * @param mixed $value
     *
     * @return Property
     */
    public function setValue($value)
    {
        $definition = $this->propertyType->getDefinition();
        if (isset($definition['hierarchical']) && $definition['hierarchical']) {
            $this->value = [];
            foreach ($value as $v) {
                foreach ($v['value'] as $itemValue) {
                    $this->value[] = $this->convertValue($itemValue['value']);
                }
            }
        } elseif (!empty($definition['array'])) {
            if (empty($definition['multiplechoice']) && isset($definition['options']) && is_array($definition['options'])) {
                $this->value = $this->convertValue(current($value)['value']);
            } else {
                $this->value = [];
                foreach ($value as $v) {
                    $this->value[] = $this->convertValue($v['value']);
                }
            }
        } else {
            $this->value = $this->convertValue($value);
        }

        return $this;
    }

    /**
     * Converts a value to the corresponding PHP type.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    protected function convertValue($value)
    {
        switch ($this->propertyType->getDataTypeId()) {
            case PropertyType::DATATYPE_BOOLEAN:
                return (bool) $value;
                break;
            case PropertyType::DATATYPE_DATETIME:
                if ($value instanceof \DateTime) {
                    return $value;
                } else {
                    try {
                        return new \DateTime($value);
                    } catch (\Exception $e) {
                        return;
                    }
                }
                break;
            case PropertyType::DATATYPE_FLOAT:
                return (float) $value;
                break;
            case PropertyType::DATATYPE_INTEGER:
                return (int) $value;
                break;
            case PropertyType::DATATYPE_STRING:
                return (string) $value;
                break;
            default:
                return $value;
                break;
        }
    }

    /**
     * Gets all data that should be available in a json representation.
     *
     * @return array An associative array of the available variables.
     */
    public function jsonSerialize()
    {
        $json = [];

        if ($this->systemName !== null) {
            $json['systemName'] = $this->systemName;
        }
        if ($this->value !== null) {
            if ($this->value instanceof \DateTime) {
                $json['value'] = $this->value->format(\DateTime::ISO8601);
            } else {
                $json['value'] = $this->value;
            }
        }

        return $json;
    }
}
