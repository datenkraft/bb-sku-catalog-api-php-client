<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\SkuCatalogApi\Client;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SKUCatalogConsumerAddSKUTest
 * @package Pact
 */
class SKUCatalogConsumerGetSKUGroupTest extends SKUCatalogConsumerTest
{
    protected int $skuGroupId;
    protected int $skuGroupIdValid;
    protected int $skuGroupIdInvalid;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->token = getenv('VALID_TOKEN_SKU_GROUP_GET');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->skuGroupIdValid = 1;
        $this->skuGroupIdInvalid = 0;

        $this->skuGroupId = $this->skuGroupIdValid;

        $this->requestData = [];
        $this->responseData = [
            'skuGroupId' => $this->skuGroupId,
            'name' => 'SKU Group Test',
        ];

        $this->path = '/sku-group/' . $this->skuGroupId;
    }

    public function testGetSKUGroupSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A SKU Group with skuGroupIdD exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /sku-group/{skuGroupId}');

        $this->beginTest();
    }

    public function testGetSKUGroupUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 401
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /sku-group/{skuGroupId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetSKUGroupForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /sku-group/{skuGroupId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetSKUGroupNotFound(): void
    {
        // Set skuGroupId to an invalid skuGroupId for a non existent SKU Group
        $this->skuGroupId = $this->skuGroupIdInvalid;
        $this->path = '/sku-group/' . $this->skuGroupId;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given(
                'A SKU Group with skuGroupId does not exist'
            )
            ->uponReceiving('Not Found GET request to /sku-group/{skuGroupId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @return ResponseInterface
     * @throws ConfigException
     * @throws AuthException
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        return $client->getSkuGroup($this->skuGroupId, Client::FETCH_RESPONSE);
    }
}
