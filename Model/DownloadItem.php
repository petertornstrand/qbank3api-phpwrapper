<?php

namespace QBNK\QBank\API\Model;

class DownloadItem  implements \JsonSerializable
{
    /** @var int Media ID */
    protected $mediaId;

    /** @var int ImageTemplate ID */
    protected $imageTemplateId;

    /** @var int ImageTemplate ID */
    protected $videoTemplateId;

    /** @var int ImageTemplate ID */
    protected $documentTemplateId;

    /** @var int ImageTemplate ID */
    protected $audioTemplateId;

    /**
     * Constructs a DownloadItem.
     *
     * @param array $parameters An array of parameters to initialize the {@link DownloadItem} with.
     * - <b>mediaId</b> - Media ID
     * - <b>imageTemplateId</b> - ImageTemplate ID
     * - <b>videoTemplateId</b> - ImageTemplate ID
     * - <b>documentTemplateId</b> - ImageTemplate ID
     * - <b>audioTemplateId</b> - ImageTemplate ID
     */
    public function __construct($parameters = [])
    {
        if (isset($parameters['mediaId'])) {
            $this->setMediaId($parameters['mediaId']);
        }
        if (isset($parameters['imageTemplateId'])) {
            $this->setImageTemplateId($parameters['imageTemplateId']);
        }
        if (isset($parameters['videoTemplateId'])) {
            $this->setVideoTemplateId($parameters['videoTemplateId']);
        }
        if (isset($parameters['documentTemplateId'])) {
            $this->setDocumentTemplateId($parameters['documentTemplateId']);
        }
        if (isset($parameters['audioTemplateId'])) {
            $this->setAudioTemplateId($parameters['audioTemplateId']);
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
     * Gets the videoTemplateId of the DownloadItem.
     * @return int	 */
    public function getVideoTemplateId()
    {
        return $this->videoTemplateId;
    }

    /**
     * Sets the "videoTemplateId" of the DownloadItem.
     *
     * @param int $videoTemplateId
     *
     * @return DownloadItem
     */
    public function setVideoTemplateId($videoTemplateId)
    {
        $this->videoTemplateId = $videoTemplateId;

        return $this;
    }
    /**
     * Gets the documentTemplateId of the DownloadItem.
     * @return int	 */
    public function getDocumentTemplateId()
    {
        return $this->documentTemplateId;
    }

    /**
     * Sets the "documentTemplateId" of the DownloadItem.
     *
     * @param int $documentTemplateId
     *
     * @return DownloadItem
     */
    public function setDocumentTemplateId($documentTemplateId)
    {
        $this->documentTemplateId = $documentTemplateId;

        return $this;
    }
    /**
     * Gets the audioTemplateId of the DownloadItem.
     * @return int	 */
    public function getAudioTemplateId()
    {
        return $this->audioTemplateId;
    }

    /**
     * Sets the "audioTemplateId" of the DownloadItem.
     *
     * @param int $audioTemplateId
     *
     * @return DownloadItem
     */
    public function setAudioTemplateId($audioTemplateId)
    {
        $this->audioTemplateId = $audioTemplateId;

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
        if ($this->videoTemplateId !== null) {
            $json['videoTemplateId'] = $this->videoTemplateId;
        }
        if ($this->documentTemplateId !== null) {
            $json['documentTemplateId'] = $this->documentTemplateId;
        }
        if ($this->audioTemplateId !== null) {
            $json['audioTemplateId'] = $this->audioTemplateId;
        }

        return $json;
    }
}
