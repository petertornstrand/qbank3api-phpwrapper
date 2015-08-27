<?php

namespace QBNK\QBank\API\Model;

class FilterItem  implements \JsonSerializable
{
    /** @var int ID of the Filter (only applicable if Category or Folder FilterItem) */
    protected $id;

    /** @var string Title */
    protected $title;

    /** @var string[] An array of mediaIds that are tagged with this title */
    protected $mediaIds;

    /**
     * Constructs a FilterItem.
     *
     * @param array $parameters An array of parameters to initialize the { @link FilterItem } with.
     * - <b>id</b> - ID of the Filter (only applicable if Category or Folder FilterItem)
     * - <b>title</b> - Title
     * - <b>mediaIds</b> - An array of mediaIds that are tagged with this title
     */
    public function __construct($parameters = [])
    {
        $this->mediaIds = [];

        if (isset($parameters['id'])) {
            $this->setId($parameters['id']);
        }
        if (isset($parameters['title'])) {
            $this->setTitle($parameters['title']);
        }
        if (isset($parameters['mediaIds'])) {
            $this->setMediaIds($parameters['mediaIds']);
        }
    }

    /**
     * Gets the id of the FilterItem.
     * @return int	 */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the "id" of the FilterItem.
     *
     * @param int $id
     *
     * @return FilterItem
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Gets the title of the FilterItem.
     * @return string	 */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the "title" of the FilterItem.
     *
     * @param string $title
     *
     * @return FilterItem
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    /**
     * Gets the mediaIds of the FilterItem.
     * @return string[]	 */
    public function getMediaIds()
    {
        return $this->mediaIds;
    }

    /**
     * Sets the "mediaIds" of the FilterItem.
     *
     * @param string[] $mediaIds
     *
     * @return FilterItem
     */
    public function setMediaIds(array $mediaIds)
    {
        $this->mediaIds = $mediaIds;

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
        if ($this->title !== null) {
            $json['title'] = $this->title;
        }
        if ($this->mediaIds !== null && !empty($this->mediaIds)) {
            $json['mediaIds'] = $this->mediaIds;
        }

        return $json;
    }
}
