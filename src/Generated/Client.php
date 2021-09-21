<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated;

class Client extends \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleResource[]|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetAuthRoleCollection(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleIdentityCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetAuthRoleIdentityCollection(), $fetch);
    }
    /**
     * Create one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody), $fetch);
    }
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
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postSku(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PostSku($requestBody), $fetch);
    }
    /**
     * Get a SKU by skuCode
     *
     * @param string $skuCode SKU Code
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSku(string $skuCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\GetSku($skuCode), $fetch);
    }
    /**
     * Add a SKU Group
     *
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroup|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postSkuGroup(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint\PostSkuGroup($requestBody), $fetch);
    }
    /**
     * Get a SKU Group by skuGroupId
     *
     * @param string $skuGroupId SKU Group Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\GetSkuGroupInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroup|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSkuGroup(string $skuGroupId, string $fetch = self::FETCH_OBJECT)
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