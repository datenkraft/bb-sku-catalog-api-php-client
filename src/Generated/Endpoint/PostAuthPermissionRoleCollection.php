<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint;

class PostAuthPermissionRoleCollection extends \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Create one or more role to permission assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     */
    public function __construct(array $requestBody)
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
        return '/auth/permission-role';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRoleResource) {
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
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\AuthPermissionRoleResource[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\SkuCatalogApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
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