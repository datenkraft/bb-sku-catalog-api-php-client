<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\SkuCatalogApi\Client;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SKUCatalogConsumerPostSKUTest
 * @package Pact
 */
class SKUCatalogConsumerGetSKUTest extends SKUCatalogConsumerTest
{
    protected string $skuCode;
    protected string $skuCodeValid;
    protected string $skuCodeInvalid;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->token = getenv('CONTRACT_TEST_CLIENT_TOKEN');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->skuCodeValid = 'skuCode_test_exists';
        $this->skuCodeInvalid = 'skuCode_test_invalid';

        $this->skuCode = $this->skuCodeValid;

        $this->requestData = [];
        $this->responseData = [
            'skuCode' => $this->skuCode,
            'skuGroupId' => '5baca897-679d-4773-90ba-59528096237e',
            'name' => 'SKU Test',
            'unit' => 'Test Unit'
        ];

        $this->path = '/sku/' . $this->skuCode;
    }

    public function testGetSKUSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A SKU with skuCode exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /sku/{skuCode}');

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
            ->uponReceiving('Unauthorized GET request to /sku/{skuCode}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetSKUForbidden(): void
    {
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /sku/{skuCode}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetSKUNotFound(): void
    {
        // Path with skuCode for non existent SKU
        $this->skuCode = $this->skuCodeInvalid;
        $this->path = '/sku/' . $this->skuCode;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('A SKU with skuCode does not exist')
            ->uponReceiving('Not Found GET request to /sku/{skuCode}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetSKUBadRequest(): void
    {
        // SkuCode contains an invalid character
        $this->skuCode = 'sku.test';
        $this->path = '/sku/' . $this->skuCode;

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The skuCode contains an invalid character')
            ->uponReceiving('Bad GET request to /sku/{skuCode}');

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

        return $client->getSku($this->skuCode, Client::FETCH_RESPONSE);
    }
}
