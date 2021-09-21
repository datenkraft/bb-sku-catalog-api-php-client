<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class PostSkuConflictErrorResponseErrorsItemextra
{
    /**
     * SKUs
     *
     * @var Sku[]
     */
    protected $skus;
    /**
     * SKUs
     *
     * @return Sku[]
     */
    public function getSkus() : array
    {
        return $this->skus;
    }
    /**
     * SKUs
     *
     * @param Sku[] $skus
     *
     * @return self
     */
    public function setSkus(array $skus) : self
    {
        $this->skus = $skus;
        return $this;
    }
}