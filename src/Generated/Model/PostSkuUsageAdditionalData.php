<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class PostSkuUsageAdditionalData
{
    /**
     * SKU Code
     *
     * @var string
     */
    protected $skuCode;
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
}