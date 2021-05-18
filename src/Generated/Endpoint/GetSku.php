<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint;

class GetSku extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    protected $skuId;

    /**
     * Get a SKU by skuId.
     *
     * @param string $skuId SKU Id
     */
    public function __construct(string $skuId)
    {
        $this->skuId = $skuId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{skuId}'], [$this->skuId], '/sku/{skuId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuNotFoundException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\Sku', 'json');
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization'];
    }
}