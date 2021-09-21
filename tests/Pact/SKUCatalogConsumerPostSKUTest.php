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
            'skuCode' => 'skuCode_test',
            'skuGroupId' => '5baca897-679d-4773-90ba-59528096237e',
            'name' => 'SKU Test',
            'unit' => 'Test Unit'
        ];
        $this->responseData = $this->requestData;

        $this->path = '/sku';
    }

    public function testPostSKUSuccess(): void
    {
        $this->expectedStatusCode = '201';

        $this->builder
            ->given(
                'A SKU with skuCode does not exist, a SKU Group with skuGroupId exists, ' .
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
        $this->requestData['skuCode'] = 'skuCode_test_2';

        // SKU Group with skuGroupId does not exist
        $this->requestData['skuGroupId'] = '129ae2f8-e088-43f8-a029-6d2fa863f496';

        // Error code in response is 422
        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The SKU Group with skuGroupId does not exist')
            ->uponReceiving('POST request to /sku with non-existent skuGroupId');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPostSKUConflict(): void
    {
        // SKU with skuCode already exists
        $this->requestData['skuCode'] = 'skuCode_test_exists';

        // Error code in response is 409
        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0] = [
            'code' => strval($this->expectedStatusCode),
            'extra' => [
                'skus' => $this->matcher->eachLike(
                    [
                        'skuCode' => 'skuCode_test',
                        'skuGroupId' => $this->matcher->uuid(),
                        'name' => $this->matcher->like('SKU Test'),
                        'unit' => $this->matcher->like('Test Unit')
                    ]
                )
            ]
        ];

        $this->builder
            ->given('A SKU with skuCode already exists')
            ->uponReceiving('POST request to /sku with already existent skuCode');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostSKUBadRequest(): void
    {
        // skuCode is not defined
        $this->requestData['skuCode'] = '';

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
        // SKU with skuCode already exists
        $this->requestData['skuCode'] = 'skuCode_test_exists';

        // SKU Group with skuGroupId does not exist
        $this->requestData['skuGroupId'] = '129ae2f8-e088-43f8-a029-6d2fa863f496';

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
            ->given('A SKU with skuCode already exists, a SKU Group with skuGroupId does not exist')
            ->uponReceiving('POST request to /sku with already existent skuCode and non-existent skuGroupId');

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
            ->setSkuCode($this->requestData['skuCode'])
            ->setName($this->requestData['name'])
            ->setUnit($this->requestData['unit']);

        return $client->postSku($sku, Client::FETCH_RESPONSE);
    }
}
