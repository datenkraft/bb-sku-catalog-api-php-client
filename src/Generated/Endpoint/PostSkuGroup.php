<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint;

class PostSkuGroup extends \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Add a SKU Group
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup $requestBody
     */
    public function __construct(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/sku-group';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\NewSkuGroup) {
            return [['Content-Type' => ['application/json']], \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroupResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuGroupResource', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuGroupInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (stripos(strtolower((string) $contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}