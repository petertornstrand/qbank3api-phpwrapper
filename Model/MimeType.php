<?php

namespace QBNK\QBank\API\Model;

class MimeType  implements \JsonSerializable
{
    /**
     * The MimeType identifier.
     * @val int	 */
    protected $id;
    /**
     * The MimeType string representation.
     * @val string	 */
    protected $mimetype;
    /**
     * The MimeType human readable description.
     * @val string	 */
    protected $description;
    /**
     * Whether the MimeType is usable in an ImageTemplate.
     * @val bool	 */
    protected $imagetemplate;
    /**
     * Whether the MimeType is usable in a VideoTemplate.
     * @val bool	 */
    protected $videotemplate;
    /**
     * The default file extension of the MimeType.
     * @val string	 */
    protected $defaultextension;
    /**
     * The MimeType class. Eg. image, video, document.
     * @val string	 */
    protected $classification;

    /**
     * Constructs a MimeType.
     *
     * @param array $parameters An array of parameters to initialize the { @link MimeType } with.
     * - <b>id</b> - The MimeType identifier.
     * - <b>mimetype</b> - The MimeType string representation.
     * - <b>description</b> - The MimeType human readable description.
     * - <b>imagetemplate</b> - Whether the MimeType is usable in an ImageTemplate.
     * - <b>videotemplate</b> - Whether the MimeType is usable in a VideoTemplate.
     * - <b>defaultextension</b> - The default file extension of the MimeType.
     * - <b>classification</b> - The MimeType class. Eg. image, video, document.
     */
    public function __construct($parameters = [])
    {
        if (isset($parameters['id'])) {
            $this->setId($parameters['id']);
        }
        if (isset($parameters['mimetype'])) {
            $this->setMimetype($parameters['mimetype']);
        }
        if (isset($parameters['description'])) {
            $this->setDescription($parameters['description']);
        }
        if (isset($parameters['imagetemplate'])) {
            $this->setImagetemplate($parameters['imagetemplate']);
        }
        if (isset($parameters['videotemplate'])) {
            $this->setVideotemplate($parameters['videotemplate']);
        }
        if (isset($parameters['defaultextension'])) {
            $this->setDefaultextension($parameters['defaultextension']);
        }
        if (isset($parameters['classification'])) {
            $this->setClassification($parameters['classification']);
        }
    }

    /**
     * Gets the id of the MimeType.
     * @return int	 */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the "id" of the MimeType.
     *
     * @param int $id
     *
     * @return MimeType
     */
    public function setId($id)
    {
        $this->id =  $id;

        return $this;
    }
    /**
     * Gets the mimetype of the MimeType.
     * @return string	 */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * Sets the "mimetype" of the MimeType.
     *
     * @param string $mimetype
     *
     * @return MimeType
     */
    public function setMimetype($mimetype)
    {
        $this->mimetype =  $mimetype;

        return $this;
    }
    /**
     * Gets the description of the MimeType.
     * @return string	 */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the "description" of the MimeType.
     *
     * @param string $description
     *
     * @return MimeType
     */
    public function setDescription($description)
    {
        $this->description =  $description;

        return $this;
    }
    /**
     * Tells whether the MimeType is imagetemplate.
     * @return bool	 */
    public function isImagetemplate()
    {
        return $this->imagetemplate;
    }

    /**
     * Sets the "imagetemplate" of the MimeType.
     *
     * @param bool $imagetemplate
     *
     * @return MimeType
     */
    public function setImagetemplate($imagetemplate)
    {
        $this->imagetemplate =  $imagetemplate;

        return $this;
    }
    /**
     * Tells whether the MimeType is videotemplate.
     * @return bool	 */
    public function isVideotemplate()
    {
        return $this->videotemplate;
    }

    /**
     * Sets the "videotemplate" of the MimeType.
     *
     * @param bool $videotemplate
     *
     * @return MimeType
     */
    public function setVideotemplate($videotemplate)
    {
        $this->videotemplate =  $videotemplate;

        return $this;
    }
    /**
     * Gets the defaultextension of the MimeType.
     * @return string	 */
    public function getDefaultextension()
    {
        return $this->defaultextension;
    }

    /**
     * Sets the "defaultextension" of the MimeType.
     *
     * @param string $defaultextension
     *
     * @return MimeType
     */
    public function setDefaultextension($defaultextension)
    {
        $this->defaultextension =  $defaultextension;

        return $this;
    }
    /**
     * Gets the classification of the MimeType.
     * @return string	 */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets the "classification" of the MimeType.
     *
     * @param string $classification
     *
     * @return MimeType
     */
    public function setClassification($classification)
    {
        $this->classification =  $classification;

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
        if ($this->mimetype !== null) {
            $json['mimetype'] = $this->mimetype;
        }
        if ($this->description !== null) {
            $json['description'] = $this->description;
        }
        if ($this->imagetemplate !== null) {
            $json['imagetemplate'] = $this->imagetemplate;
        }
        if ($this->videotemplate !== null) {
            $json['videotemplate'] = $this->videotemplate;
        }
        if ($this->defaultextension !== null) {
            $json['defaultextension'] = $this->defaultextension;
        }
        if ($this->classification !== null) {
            $json['classification'] = $this->classification;
        }

        return $json;
    }
}
