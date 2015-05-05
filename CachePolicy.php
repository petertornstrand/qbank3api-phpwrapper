<?php

namespace QBNK\QBank\API;

/**
 * Represents the Cache Policy of the request.
 */
class CachePolicy
{
    /** @var bool */
    protected $enabled;

    /** @var int */
    protected $lifetime;

    public function __construct($enabled, $lifetime)
    {
        $this->enabled  = (bool) $enabled;
        $this->lifetime = (int) $lifetime;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function getLifetime()
    {
        return $this->lifetime;
    }
}
