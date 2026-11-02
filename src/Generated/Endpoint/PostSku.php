<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Endpoint;

class PostSku extends \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Add a SKU
     * @param \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource $requestBody
     */
    public function __construct(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource $requestBody)
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
        return '/sku';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuResource) {
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
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuBadRequestException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuForbiddenException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuConflictException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResource|\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\SkuResource', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuConflictException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception\PostSkuInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse', 'json'), $response);
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