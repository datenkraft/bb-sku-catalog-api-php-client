<?php

namespace Pact;

use Exception;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class SKUCatalogConsumerAddSKUTest
 * @package Pact
 */
class SKUCatalogConsumerAddSKUTest extends SKUCatalogConsumerTest
{
    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'POST';
        $this->path = '/sku';

        $this->requestHeaders = [
            ['Authorization' => 'Bearer ' . $this->token],
            ['Content-Type' => 'application/json']
        ];
        $this->responseHeaders = [
            ['Content-Type' => 'application/json']
        ];

        $this->requestData = [
            'skuId' => 'skuId_test',
            'skuGroupId' => 1,
            'name' => 'Test sku name'
        ];
        $this->responseData = $this->requestData;
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUSuccess()
    {
        $this->expectedStatusCode = 201;

        $this->builder
            ->given('A SKU with skuIdD does not exist, a SKU Group with skuGroupId exists, ' .
                'the request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful POST request to /sku');

        $this->testSuccessResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUUnauthorized()
    {
        // Invalid token
        $this->token = 'invalid_token';

        $this->expectedStatusCode = 401;
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized POST request to /sku');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUForbidden()
    {
        // Token with invalid scope
        $this->token = 'valid_token_invalid_scope';

        $this->expectedStatusCode = 403;
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /sku');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUUnprocessableEntity()
    {
        // SKU Group with skuGroupId does not exist
        $this->requestData['skuGroupId'] = 0;

        // Error code in response is 422
        $this->expectedStatusCode = 422;
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The SKU Group with skuGroupId does not exist')
            ->uponReceiving('POST request to /sku with non-existent skuGroupId');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUConflict()
    {
        // SKU with skuId already exists
        $this->requestData['skuId'] = 'skuId_test_duplicate';

        // Error code in response is 409
        $this->expectedStatusCode = 409;
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('A SKU with skuId already exists')
            ->uponReceiving('POST request to /sku with already existent skuId');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUBadRequest()
    {
        // skuId is not defined
        unset($this->requestData['skuId']);

        // Error code in response is 400
        $this->expectedStatusCode = 400;
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad POST request to /sku');

        $this->testErrorResponse();
    }

}
