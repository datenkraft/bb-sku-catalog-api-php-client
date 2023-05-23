<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class PostSkuConflictErrorResponseErrorsItemextra extends \ArrayObject
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
        $this->initialized['skus'] = true;
        $this->skus = $skus;
        return $this;
    }
}