<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class Sku
{
    /**
     * SKU Code
     *
     * @var string
     */
    protected $skuCode;
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
     * SKU Code
     *
     * @return string
     */
    public function getSkuCode() : string
    {
        return $this->skuCode;
    }
    /**
     * SKU Code
     *
     * @param string $skuCode
     *
     * @return self
     */
    public function setSkuCode(string $skuCode) : self
    {
        $this->skuCode = $skuCode;
        return $this;
    }
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
}