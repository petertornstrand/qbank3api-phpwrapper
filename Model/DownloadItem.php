<?php

namespace QBNK\QBank\API\Model;

class DownloadItem  implements \JsonSerializable
{
    /** @var int Media ID */
    protected $mediaId;

    /** @var int ImageTemplate ID */
    protected $imageTemplateId;

    /**
     * Constructs a DownloadItem.
     *
     * @param array $parameters An array of parameters to initialize the {@link DownloadItem} with.
     * - <b>mediaId</b> - Media ID
     * - <b>imageTemplateId</b> - ImageTemplate ID
     */
    public function __construct($parameters = [])
    {
        if (isset($parameters['mediaId'])) {
            $this->setMediaId($parameters['mediaId']);
        }
        if (isset($parameters['imageTemplateId'])) {
            $this->setImageTemplateId($parameters['imageTemplateId']);
        }
    }

    /**
     * Gets the mediaId of the DownloadItem.
     * @return int	 */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Sets the "mediaId" of the DownloadItem.
     *
     * @param int $mediaId
     *
     * @return DownloadItem
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }
    /**
     * Gets the imageTemplateId of the DownloadItem.
     * @return int	 */
    public function getImageTemplateId()
    {
        return $this->imageTemplateId;
    }

    /**
     * Sets the "imageTemplateId" of the DownloadItem.
     *
     * @param int $imageTemplateId
     *
     * @return DownloadItem
     */
    public function setImageTemplateId($imageTemplateId)
    {
        $this->imageTemplateId = $imageTemplateId;

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

        if ($this->mediaId !== null) {
            $json['mediaId'] = $this->mediaId;
        }
        if ($this->imageTemplateId !== null) {
            $json['imageTemplateId'] = $this->imageTemplateId;
        }

        return $json;
    }
}
