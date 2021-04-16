<?php

namespace Pact;

use Exception;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class SKUCatalogConsumerAddSKUTest
 * @package Pact
 */
class SKUCatalogConsumerGetSKUTest extends SKUCatalogConsumerTest
{
    protected string $skuIdValid;
    protected string $skuIdInvalid;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->requestHeaders = [
            ['Authorization' => 'Bearer ' . $this->token],
        ];
        $this->responseHeaders = [
            ['Content-Type' => 'application/json']
        ];

        $this->skuIdValid = 'skuId_test';
        $this->skuIdInvalid = 'skuId_test_invalid';

        $this->requestData = [];
        $this->responseData = [
            'skuId' => $this->skuIdValid,
            'skuGroupId' => 1,
            'name' => 'Test sku name'
        ];

        $this->path = '/sku/' . $this->skuIdValid;
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A SKU with skuIdD exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /sku/{skuId}');

        $this->testSuccessResponse();

    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';

        // Error code in response is 401
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /sku/{skuId}');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUForbidden(): void
    {
        // Token with invalid scope
        $this->token = 'valid_token_invalid_scope';

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /sku/{skuId}');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUNotFound(): void
    {
        // Path with skuId for non existent SKU
        $this->path = '/sku/' . $this->skuIdInvalid;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given(
                'A SKU with skuId does not exist and ' .
                'the request is valid, the token is valid with an invalid scope'
            )
            ->uponReceiving('Not Found GET request to /sku/{skuId}');

        $this->testErrorResponse();
    }
}
