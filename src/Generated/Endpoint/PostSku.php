<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint;

class PostSku extends \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Add a SKU
     *
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource $requestBody 
     */
    public function __construct(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/sku';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuNotFoundException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\SkuResource', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuConflictException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization', 'bearerAuth');
    }
}