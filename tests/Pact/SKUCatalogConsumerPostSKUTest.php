<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\SkuCatalogApi\Client;
use Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\Sku;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SKUCatalogConsumerPostSKUTest
 * @package Pact
 */
class SKUCatalogConsumerPostSKUTest extends SKUCatalogConsumerTest
{
    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'POST';

        $this->token = getenv('VALID_TOKEN_SKU_POST');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = ['Content-Type' => 'application/json'];

        $this->requestData = [
            'skuId' => 'skuId_test',
            'skuGroupId' => 1,
            'name' => 'SKU Test'
        ];
        $this->responseData = $this->requestData;

        $this->path = '/sku';
    }
    
    public function testPostSKUSuccess(): void
    {
        $this->expectedStatusCode = '201';

        $this->builder
            ->given(
                'A SKU with skuIdD does not exist, a SKU Group with skuGroupId exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful POST request to /sku');

        $this->beginTest();
    }

    public function testPostSKUUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized POST request to /sku');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostSKUForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_GROUP_GET');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /sku');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostSKUUnprocessableEntity(): void
    {
        // New SKU ID
        $this->requestData['skuId'] = 'skuId_test_2';

        // SKU Group with skuGroupId does not exist
        $this->requestData['skuGroupId'] = 0;

        // Error code in response is 422
        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The SKU Group with skuGroupId does not exist')
            ->uponReceiving('POST request to /sku with non-existent skuGroupId');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostSKUConflict(): void
    {
        // SKU with skuId already exists
        $this->requestData['skuId'] = 'skuId_test_duplicate';

        // Error code in response is 409
        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('A SKU with skuId already exists')
            ->uponReceiving('POST request to /sku with already existent skuId');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostSKUBadRequest(): void
    {
        // skuId is not defined
        $this->requestData['skuId'] = '';

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad POST request to /sku');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPostSKUMultipleErrors()
    {
        // SKU with skuId already exists
        $this->requestData['skuId'] = 'skuId_test_duplicate';

        // SKU Group with skuGroupId does not exist
        $this->requestData['skuGroupId'] = 0;

        // Status code of the response is 400
        $this->expectedStatusCode = '400';

        // Error code of first error is 409
        $this->errorResponse['errors'][0] = [
            'code' => '409',
            'message' => $this->matcher->like('Example error message'),
        ];

        // Error code of second error is 422
        $this->errorResponse['errors'][1] = [
            'code' => '422',
            'message' => $this->matcher->like('Example error message'),
        ];

        $this->builder
            ->given('A SKU with skuId already exists, a SKU Group with skuGroupId does not exist')
            ->uponReceiving('POST request to /sku with already existent skuId and non-existent skuGroupId');

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

        $sku = (new Sku())
            ->setSkuGroupId($this->requestData['skuGroupId'])
            ->setSkuId($this->requestData['skuId'])
            ->setName($this->requestData['name']);

        return $client->postSku($sku, Client::FETCH_RESPONSE);
    }
}
