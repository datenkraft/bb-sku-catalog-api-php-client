<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class PatchSkuResource
{
    /**
     * SKU Group Id
     *
     * @var string
     */
    protected $skuGroupId;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * Unit
     *
     * @var string|null
     */
    protected $unit;
    /**
     * Active
     *
     * @var bool
     */
    protected $active;
    /**
     * SKU Group Id
     *
     * @return string
     */
    public function getSkuGroupId() : string
    {
        return $this->skuGroupId;
    }
    /**
     * SKU Group Id
     *
     * @param string $skuGroupId
     *
     * @return self
     */
    public function setSkuGroupId(string $skuGroupId) : self
    {
        $this->skuGroupId = $skuGroupId;
        return $this;
    }
    /**
     * Name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Unit
     *
     * @return string|null
     */
    public function getUnit() : ?string
    {
        return $this->unit;
    }
    /**
     * Unit
     *
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit) : self
    {
        $this->unit = $unit;
        return $this;
    }
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