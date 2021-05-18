<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class SkuGroup
{
    /**
     * SKU Group Id
     *
     * @var int
     */
    protected $skuGroupId;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * SKU Group Id
     *
     * @return int
     */
    public function getSkuGroupId() : int
    {
        return $this->skuGroupId;
    }
    /**
     * SKU Group Id
     *
     * @param int $skuGroupId
     *
     * @return self
     */
    public function setSkuGroupId(int $skuGroupId) : self
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
}