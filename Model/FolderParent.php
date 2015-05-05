<?php

namespace QBNK\QBank\API\Model;

class FolderParent  implements \JsonSerializable
{
    /** @var int The Folder identifier. */
    protected $folderid;

    /** @var int The distance from the specified Folder identifer, ie. the reverse depth. */
    protected $depth;

    /**
     * Constructs a FolderParent.
     *
     * @param array $parameters An array of parameters to initialize the { @link FolderParent } with.
     * - <b>folderid</b> - The Folder identifier.
     * - <b>depth</b> - The distance from the specified Folder identifer, ie. the reverse depth.
     */
    public function __construct($parameters = [])
    {
        if (isset($parameters['folderid'])) {
            $this->setFolderid($parameters['folderid']);
        }
        if (isset($parameters['depth'])) {
            $this->setDepth($parameters['depth']);
        }
    }

    /**
     * Gets the folderid of the FolderParent.
     * @return int	 */
    public function getFolderid()
    {
        return $this->folderid;
    }

    /**
     * Sets the "folderid" of the FolderParent.
     *
     * @param int $folderid
     *
     * @return FolderParent
     */
    public function setFolderid($folderid)
    {
        $this->folderid = $folderid;

        return $this;
    }
    /**
     * Gets the depth of the FolderParent.
     * @return int	 */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Sets the "depth" of the FolderParent.
     *
     * @param int $depth
     *
     * @return FolderParent
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

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

        if ($this->folderid !== null) {
            $json['folderid'] = $this->folderid;
        }
        if ($this->depth !== null) {
            $json['depth'] = $this->depth;
        }

        return $json;
    }
}
