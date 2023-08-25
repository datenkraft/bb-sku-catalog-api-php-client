<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class PatchSkuUsageAdditionalData
{
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
        $this->active = $active;
        return $this;
    }
}