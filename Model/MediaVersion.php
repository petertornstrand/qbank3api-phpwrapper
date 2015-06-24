<?php

namespace QBNK\QBank\API\Model;

class MediaVersion  implements \JsonSerializable
{
    /** @var int The Media identifier. */
    protected $mediaId;

    /** @var string  */
    protected $filename;

    /** @var string  */
    protected $uploaded;

    /** @var int The Media replacement Media identifier. Only set when the Media has been replaced, ie. versioning. */
    protected $replacedBy;

    /** @var string  */
    protected $comment;

    /** @var string  */
    protected $userId;

    /** @var string  */
    protected $version;

    /**
     * Constructs a MediaVersion.
     *
     * @param array $parameters An array of parameters to initialize the { @link MediaVersion } with.
     * - <b>mediaId</b> - The Media identifier.
     * - <b>filename</b> -
     * - <b>uploaded</b> -
     * - <b>replacedBy</b> - The Media replacement Media identifier. Only set when the Media has been replaced, ie. versioning.
     * - <b>comment</b> -
     * - <b>userId</b> -
     * - <b>version</b> -
     */
    public function __construct($parameters = [])
    {
        if (isset($parameters['mediaId'])) {
            $this->setMediaId($parameters['mediaId']);
        }
        if (isset($parameters['filename'])) {
            $this->setFilename($parameters['filename']);
        }
        if (isset($parameters['uploaded'])) {
            $this->setUploaded($parameters['uploaded']);
        }
        if (isset($parameters['replacedBy'])) {
            $this->setReplacedBy($parameters['replacedBy']);
        }
        if (isset($parameters['comment'])) {
            $this->setComment($parameters['comment']);
        }
        if (isset($parameters['userId'])) {
            $this->setUserId($parameters['userId']);
        }
        if (isset($parameters['version'])) {
            $this->setVersion($parameters['version']);
        }
    }

    /**
     * Gets the mediaId of the MediaVersion.
     * @return int	 */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Sets the "mediaId" of the MediaVersion.
     *
     * @param int $mediaId
     *
     * @return MediaVersion
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }
    /**
     * Gets the filename of the MediaVersion.
     * @return string	 */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets the "filename" of the MediaVersion.
     *
     * @param string $filename
     *
     * @return MediaVersion
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }
    /**
     * Gets the uploaded of the MediaVersion.
     * @return string	 */
    public function getUploaded()
    {
        return $this->uploaded;
    }

    /**
     * Sets the "uploaded" of the MediaVersion.
     *
     * @param string $uploaded
     *
     * @return MediaVersion
     */
    public function setUploaded($uploaded)
    {
        $this->uploaded = $uploaded;

        return $this;
    }
    /**
     * Gets the replacedBy of the MediaVersion.
     * @return int	 */
    public function getReplacedBy()
    {
        return $this->replacedBy;
    }

    /**
     * Sets the "replacedBy" of the MediaVersion.
     *
     * @param int $replacedBy
     *
     * @return MediaVersion
     */
    public function setReplacedBy($replacedBy)
    {
        $this->replacedBy = $replacedBy;

        return $this;
    }
    /**
     * Gets the comment of the MediaVersion.
     * @return string	 */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the "comment" of the MediaVersion.
     *
     * @param string $comment
     *
     * @return MediaVersion
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }
    /**
     * Gets the userId of the MediaVersion.
     * @return string	 */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets the "userId" of the MediaVersion.
     *
     * @param string $userId
     *
     * @return MediaVersion
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
    /**
     * Gets the version of the MediaVersion.
     * @return string	 */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets the "version" of the MediaVersion.
     *
     * @param string $version
     *
     * @return MediaVersion
     */
    public function setVersion($version)
    {
        $this->version = $version;

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
        if ($this->filename !== null) {
            $json['filename'] = $this->filename;
        }
        if ($this->uploaded !== null) {
            $json['uploaded'] = $this->uploaded->format(\DateTime::ISO8601);
        }
        if ($this->replacedBy !== null) {
            $json['replacedBy'] = $this->replacedBy;
        }
        if ($this->comment !== null) {
            $json['comment'] = $this->comment;
        }
        if ($this->userId !== null) {
            $json['userId'] = $this->userId;
        }
        if ($this->version !== null) {
            $json['version'] = $this->version;
        }

        return $json;
    }
}
