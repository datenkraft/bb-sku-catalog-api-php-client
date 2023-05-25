<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class SkuGroupResource extends \ArrayObject
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
        $this->initialized['skuGroupId'] = true;
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}