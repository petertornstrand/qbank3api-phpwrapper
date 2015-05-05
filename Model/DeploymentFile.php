<?php

namespace QBNK\QBank\API\Model;

use DateTime;

    class DeploymentFile  implements \JsonSerializable
    {
    /** @var int The identifier of the DeploymentSite this file is deployed to. */
    protected $deploymentSiteId;

    /** @var string The filename of the deployed file. */
    protected $remoteFile;

    /** @var int The identifier of the Image template used. */
    protected $imageTemplateId;

    /** @var int The identifier of the Video template used. */
    protected $videoTemplateId;

    /** @var string The name of the template, if any. */
    protected $templateName;

    /** @var DateTime The time of deployment for this file. */
    protected $created;

    /** @var string The original filename of the file when uploaded to QBank. */
    protected $filename;

    /** @var int The size of the file on disk */
    protected $filesize;

    /** @var object Metadata associated with the deployed media */
    protected $metadata;

    /**
     * Constructs a DeploymentFile.
     *
     * @param array $parameters An array of parameters to initialize the { @link DeploymentFile } with.
     * - <b>deploymentSiteId</b> - The identifier of the DeploymentSite this file is deployed to.
     * - <b>remoteFile</b> - The filename of the deployed file.
     * - <b>imageTemplateId</b> - The identifier of the Image template used.
     * - <b>videoTemplateId</b> - The identifier of the Video template used.
     * - <b>templateName</b> - The name of the template, if any.
     * - <b>created</b> - The time of deployment for this file.
     * - <b>filename</b> - The original filename of the file when uploaded to QBank.
     * - <b>filesize</b> - The size of the file on disk
     * - <b>metadata</b> - Metadata associated with the deployed media
     */
    public function __construct($parameters = [])
    {
        if (isset($parameters['deploymentSiteId'])) {
            $this->setDeploymentSiteId($parameters['deploymentSiteId']);
        }
        if (isset($parameters['remoteFile'])) {
            $this->setRemoteFile($parameters['remoteFile']);
        }
        if (isset($parameters['imageTemplateId'])) {
            $this->setImageTemplateId($parameters['imageTemplateId']);
        }
        if (isset($parameters['videoTemplateId'])) {
            $this->setVideoTemplateId($parameters['videoTemplateId']);
        }
        if (isset($parameters['templateName'])) {
            $this->setTemplateName($parameters['templateName']);
        }
        if (isset($parameters['created'])) {
            $this->setCreated($parameters['created']);
        }
        if (isset($parameters['filename'])) {
            $this->setFilename($parameters['filename']);
        }
        if (isset($parameters['filesize'])) {
            $this->setFilesize($parameters['filesize']);
        }
        if (isset($parameters['metadata'])) {
            $this->setMetadata($parameters['metadata']);
        }
    }

    /**
     * Gets the deploymentSiteId of the DeploymentFile.
     * @return int	 */
    public function getDeploymentSiteId()
    {
        return $this->deploymentSiteId;
    }

    /**
     * Sets the "deploymentSiteId" of the DeploymentFile.
     *
     * @param int $deploymentSiteId
     *
     * @return DeploymentFile
     */
    public function setDeploymentSiteId($deploymentSiteId)
    {
        $this->deploymentSiteId = $deploymentSiteId;

        return $this;
    }
    /**
     * Gets the remoteFile of the DeploymentFile.
     * @return string	 */
    public function getRemoteFile()
    {
        return $this->remoteFile;
    }

    /**
     * Sets the "remoteFile" of the DeploymentFile.
     *
     * @param string $remoteFile
     *
     * @return DeploymentFile
     */
    public function setRemoteFile($remoteFile)
    {
        $this->remoteFile = $remoteFile;

        return $this;
    }
    /**
     * Gets the imageTemplateId of the DeploymentFile.
     * @return int	 */
    public function getImageTemplateId()
    {
        return $this->imageTemplateId;
    }

    /**
     * Sets the "imageTemplateId" of the DeploymentFile.
     *
     * @param int $imageTemplateId
     *
     * @return DeploymentFile
     */
    public function setImageTemplateId($imageTemplateId)
    {
        $this->imageTemplateId = $imageTemplateId;

        return $this;
    }
    /**
     * Gets the videoTemplateId of the DeploymentFile.
     * @return int	 */
    public function getVideoTemplateId()
    {
        return $this->videoTemplateId;
    }

    /**
     * Sets the "videoTemplateId" of the DeploymentFile.
     *
     * @param int $videoTemplateId
     *
     * @return DeploymentFile
     */
    public function setVideoTemplateId($videoTemplateId)
    {
        $this->videoTemplateId = $videoTemplateId;

        return $this;
    }
    /**
     * Gets the templateName of the DeploymentFile.
     * @return string	 */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Sets the "templateName" of the DeploymentFile.
     *
     * @param string $templateName
     *
     * @return DeploymentFile
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;

        return $this;
    }
    /**
     * Gets the created of the DeploymentFile.
     * @return DateTime	 */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets the "created" of the DeploymentFile.
     *
     * @param DateTime $created
     *
     * @return DeploymentFile
     */
    public function setCreated($created)
    {
        if ($created instanceof DateTime) {
            $this->created = $created;
        } else {
            try {
                $this->created = new DateTime($created);
            } catch (\Exception $e) {
                $this->created = null;
            }
        }

        return $this;
    }
    /**
     * Gets the filename of the DeploymentFile.
     * @return string	 */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets the "filename" of the DeploymentFile.
     *
     * @param string $filename
     *
     * @return DeploymentFile
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }
    /**
     * Gets the filesize of the DeploymentFile.
     * @return int	 */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Sets the "filesize" of the DeploymentFile.
     *
     * @param int $filesize
     *
     * @return DeploymentFile
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }
    /**
     * Gets the metadata of the DeploymentFile.
     * @return object	 */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Sets the "metadata" of the DeploymentFile.
     *
     * @param array|string $metadata
     *
     * @return DeploymentFile
     */
    public function setMetadata($metadata)
    {
        if (is_array($metadata)) {
            $this->metadata = $metadata;

            return $this;
        }
        $this->metadata = json_decode($metadata, true);
        if ($this->metadata === null) {
            $this->metadata = $metadata;
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

        if ($this->deploymentSiteId !== null) {
            $json['deploymentSiteId'] = $this->deploymentSiteId;
        }
        if ($this->remoteFile !== null) {
            $json['remoteFile'] = $this->remoteFile;
        }
        if ($this->imageTemplateId !== null) {
            $json['imageTemplateId'] = $this->imageTemplateId;
        }
        if ($this->videoTemplateId !== null) {
            $json['videoTemplateId'] = $this->videoTemplateId;
        }
        if ($this->templateName !== null) {
            $json['templateName'] = $this->templateName;
        }
        if ($this->created !== null) {
            $json['created'] = $this->created->format(\DateTime::ISO8601);
        }
        if ($this->filename !== null) {
            $json['filename'] = $this->filename;
        }
        if ($this->filesize !== null) {
            $json['filesize'] = $this->filesize;
        }
        if ($this->metadata !== null) {
            $json['metadata'] = $this->metadata;
        }

        return $json;
    }
    }
