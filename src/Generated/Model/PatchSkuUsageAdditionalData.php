<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class PatchSkuUsageAdditionalData extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Active
     *
     * @var bool
     */
    protected $active;
    /**
     * Active
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * Active
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
}