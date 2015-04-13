<?php

namespace QBNK\QBank\API\Controller;

use QBNK\QBank\API\Model\ObjectType;

class ObjecttypesController extends ControllerAbstract
{
    /**
     * Lists all Object Types.
     *
     * @return ObjectType[]
     */
    public function listObjectTypes()
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/objecttypes', $parameters);
        foreach ($result as &$entry) {
            $entry = new ObjectType($entry);
        }
        unset($entry);
        reset($result);

        return $result;
    }
    /**
     * Fetches a specific ObjectType.
     *
     * Fetches an ObjectType by the specified identifier.
     *
     * @param int $id The ObjectType identifier.
     *
     * @return ObjectType
     */
    public function retrieveObjectType($id)
    {
        $parameters = [
            'query'   => [],
            'body'    => json_encode([]),
            'headers' => [],
        ];
        $result = $this->get('v1/objecttypes/'.$id.'', $parameters);
        $result = new ObjectType($result);

        return $result;
    }
}
