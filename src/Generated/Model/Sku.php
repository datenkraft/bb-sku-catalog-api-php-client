<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class Sku
{
    /**
     * SKU Id
     *
     * @var string
     */
    protected $skuId;
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
     * SKU Id
     *
     * @return string
     */
    public function getSkuId() : string
    {
        return $this->skuId;
    }
    /**
     * SKU Id
     *
     * @param string $skuId
     *
     * @return self
     */
    public function setSkuId(string $skuId) : self
    {
        $this->skuId = $skuId;
        return $this;
    }
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