<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\PostSkuConflictErrorResponse' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\PostSkuConflictErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\PostSkuConflictErrorResponseErrorsItem' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\PostSkuConflictErrorResponseErrorsItemNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\PostSkuConflictErrorResponseErrorsItemextra' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\PostSkuConflictErrorResponseErrorsItemextraNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\InformationResponse' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\InformationResponseNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\Information' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\InformationNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\Collection' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\CollectionNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\CollectionPagination' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\CollectionPaginationNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\AuditLog' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\AuditLogNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\AuditLogCollection' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\AuditLogCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\AuthPermissionRoleResource' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\AuthPermissionRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\NewAuthRoleResource' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\NewAuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\SkuResource' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\SkuResourceNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\SkuGroupResource' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\SkuGroupResourceNormalizer', 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\NewSkuGroup' => 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Normalizer\\NewSkuGroupNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
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
}