<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PostSkuConflictErrorResponseErrorsItemextraNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\PostSkuConflictErrorResponseErrorsItemextra';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\PostSkuConflictErrorResponseErrorsItemextra';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuConflictErrorResponseErrorsItemextra();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('skus', $data)) {
            $values = array();
            foreach ($data['skus'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\Sku', 'json', $context);
            }
            $object->setSkus($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSkus()) {
            $values = array();
            foreach ($object->getSkus() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['skus'] = $values;
        }
        return $data;
    }
}