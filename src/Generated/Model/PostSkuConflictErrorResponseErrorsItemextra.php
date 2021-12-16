<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class PostSkuConflictErrorResponseErrorsItemextra
{
    /**
     * SKUs
     *
     * @var SkuResource[]
     */
    protected $skus;
    /**
     * SKUs
     *
     * @return SkuResource[]
     */
    public function getSkus() : array
    {
        return $this->skus;
    }
    /**
     * SKUs
     *
     * @param SkuResource[] $skus
     *
     * @return self
     */
    public function setSkus(array $skus) : self
    {
        $this->skus = $skus;
        return $this;
    }
}