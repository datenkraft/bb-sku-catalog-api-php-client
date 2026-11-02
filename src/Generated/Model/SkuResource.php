<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\AdditionalPropertiesInterface;
class SkuResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * SKU Group Id
     *
     * @var string
     */
    public string $skuGroupId;
    /**
     * Name
     *
     * @var string
     */
    public string $name;
    /**
     * Unit
     *
     * @var string|null
     */
    public ?string $unit;
    /**
     * SKU Code
     *
     * @var string
     */
    public string $skuCode;
    /**
     * Active
     *
     * @var bool
     */
    public bool $active;
    public function definedProperties(): array
    {
        return ['skuGroupId' => 'skuGroupId', 'name' => 'name', 'unit' => 'unit', 'skuCode' => 'skuCode', 'active' => 'active'];
    }
}