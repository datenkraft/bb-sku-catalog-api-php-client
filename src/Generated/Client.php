<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated;

class Client extends \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetOpenApiInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format (yaml or json, fallback is json)
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetOpenApiInFormatInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * Add a SKU
     *
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function addSku(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\AddSku($requestBody), $fetch);
    }
    /**
     * Get a SKU by skuId
     *
     * @param string $skuId SKU Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSku(string $skuId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetSku($skuId), $fetch);
    }
    /**
     * Add a SKU Group
     *
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuGroupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuGroupForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuGroupBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\AddSkuGroupInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroup|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function addSkuGroup(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\AddSkuGroup($requestBody), $fetch);
    }
    /**
     * Get a SKU Group by skuGroupId
     *
     * @param int $skuGroupId SKU Group Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroup|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSkuGroup(int $skuGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetSkuGroup($skuGroupId), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('/UNDEFINED');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}