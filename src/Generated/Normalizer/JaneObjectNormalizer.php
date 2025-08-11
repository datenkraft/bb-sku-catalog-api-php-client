<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuditLog::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\AuditLogNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuditLogCollection::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\AuditLogCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRoleResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleCollection::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\AuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\BaseSkuResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\BaseSkuResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Collection::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\CollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\CollectionPagination::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\CollectionPaginationNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Error::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\ErrorNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorReferencesItem::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\ErrorResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\GetAuthPermissionCollectionResponse::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Information::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\NewSkuGroupNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PatchSkuResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\PatchSkuResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PatchSkuUsageAdditionalData::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\PatchSkuUsageAdditionalDataNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\PostSkuResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuUsageAdditionalData::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\PostSkuUsageAdditionalDataNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroupResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\SkuGroupResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroupResourceCollection::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\SkuGroupResourceCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResource::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\SkuResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResourceCollection::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\SkuResourceCollectionNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuditLog::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuditLogCollection::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRoleResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleCollection::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\BaseSkuResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Collection::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\CollectionPagination::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Error::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorReferencesItem::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\GetAuthPermissionCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Information::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\InformationResponse::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewAuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PatchSkuResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PatchSkuUsageAdditionalData::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuUsageAdditionalData::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroupResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroupResourceCollection::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResource::class => false,
            \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResourceCollection::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}