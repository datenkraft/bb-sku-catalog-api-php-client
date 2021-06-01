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
class SKUCatalogConsumerGetSKUTest extends SKUCatalogConsumerTest
{
    protected string $skuId;
    protected string $skuIdValid;
    protected string $skuIdInvalid;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->token = getenv('VALID_TOKEN_SKU_GET');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->skuIdValid = 'skuId_test';
        $this->skuIdInvalid = 'skuId_test_invalid';

        $this->skuId = $this->skuIdValid;

        $this->requestData = [];
        $this->responseData = [
            'skuId' => $this->skuId,
            'skuGroupId' => 1,
            'name' => 'SKU Test'
        ];

        $this->path = '/sku/' . $this->skuId;
    }

    public function testGetSKUSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A SKU with skuIdD exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /sku/{skuId}');

        $this->beginTest();
    }

    public function testGetSKUUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 401
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /sku/{skuId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetSKUForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_GROUP_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /sku/{skuId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetSKUNotFound(): void
    {
        // Path with skuId for non existent SKU
        $this->skuId = $this->skuIdInvalid;
        $this->path = '/sku/' . $this->skuId;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given(
                'A SKU with skuId does not exist'
            )
            ->uponReceiving('Not Found GET request to /sku/{skuId}');

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

        return $client->getSku($this->skuId, Client::FETCH_RESPONSE);
    }
}
