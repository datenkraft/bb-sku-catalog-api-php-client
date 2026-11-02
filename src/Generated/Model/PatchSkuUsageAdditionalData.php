<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\AdditionalPropertiesInterface;
class PatchSkuUsageAdditionalData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Active
     *
     * @var bool
     */
    public bool $active;
    public function definedProperties(): array
    {
        return ['active' => 'active'];
    }
}