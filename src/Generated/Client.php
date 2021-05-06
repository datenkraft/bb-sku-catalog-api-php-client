<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated;

class Client extends \Jane\OpenApiRuntime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }

    /**
     * Get the openapi documentation in the specified format (yaml or json, fallback is json).
     *
     * @param string $format Openapi file format
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }

    /**
     * Add a SKU.
     *
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku $requestBody
     * @param string                                                        $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuBadRequestException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku|\Psr\Http\Message\ResponseInterface|null
     */
    public function addSku(Model\Sku $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\AddSku($requestBody), $fetch);
    }

    /**
     * Get a SKU by skuId.
     *
     * @param string $skuId SKU Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuNotFoundException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku|\Psr\Http\Message\ResponseInterface|null
     */
    public function getSku(string $skuId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetSku($skuId), $fetch);
    }

    /**
     * Add a SKU Group.
     *
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup $requestBody
     * @param string                                                                $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuGroupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuGroupForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuGroupBadRequestException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroup|\Psr\Http\Message\ResponseInterface|null
     */
    public function addSkuGroup(Model\NewSkuGroup $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\AddSkuGroup($requestBody), $fetch);
    }

    /**
     * Get a SKU Group by skuGroupId.
     *
     * @param int    $skuGroupId SKU Group Id
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupNotFoundException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroup|\Psr\Http\Message\ResponseInterface|null
     */
    public function getSkuGroup(int $skuGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetSkuGroup($skuGroupId), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('/UNDEFINED');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer([new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\JaneObjectNormalizer()], [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
