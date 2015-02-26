<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\PropertySet;
use QBNK\QBank\API\Model\PropertyType;

class PropertysetsController extends ControllerAbstract
{
    /**
     * Lists all PropertySets.
     *
     * @return PropertySet[]
     */
    public function listPropertySets()
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/propertysets', $parameters);
        foreach ($result as &$entry) {
            $entry = new PropertySet($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    /**
     * Lists all PropertyTypes in QBank.
     *
     * @return PropertyType[]
     */
    public function listPropertyTypes()
    {
        $parameters = [
            'query'   => [],
            'body'    => [],
            'headers' => [],
        ];
        $result = $this->get('v1/propertysets/propertytypes', $parameters);
        foreach ($result as &$entry) {
            $entry = new PropertyType($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
}
