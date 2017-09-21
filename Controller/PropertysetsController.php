<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\CachePolicy;
use QBNK\QBank\API\Model\PropertySet;
use QBNK\QBank\API\Model\PropertyType;

class PropertysetsController extends ControllerAbstract
{
    /**
     * Lists all PropertySets.
     * 
     
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     
     * @return PropertySet[]	
     */
    public function listPropertySets(CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];

        $result = $this->get('v1/propertysets', $parameters, $cachePolicy);
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
     * @param null $systemName Returns the specified propertytype
     * @param CachePolicy $cachePolicy A custom cache policy used for this request only.
     
     * @return PropertyType[]|PropertyType|null
     */
    public function listPropertyTypes($systemName = null, CachePolicy $cachePolicy = null)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];

        $result = $this->get('v1/propertysets/propertytypes', $parameters, $cachePolicy);
        foreach ($result as &$entry) {
            $entry = new PropertyType($entry);
        }
        unset($entry);
        reset($result);

        if ($systemName !== null) {
            foreach ($result as $entry) {
                if ($entry->getSystemName() === $systemName) {
                    return $entry;
                }
            }

            return;
        }

        return $result;
    }
}
