<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\AdditionalPropertiesInterface;
class SkuGroupResourceCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var CollectionPagination
     */
    public CollectionPagination $pagination;
    /**
     * SkuGroupResourceCollection
     *
     * @var list<iterable<string, mixed>>
     */
    public array $data;
    public function definedProperties(): array
    {
        return ['pagination' => 'pagination', 'data' => 'data'];
    }
}