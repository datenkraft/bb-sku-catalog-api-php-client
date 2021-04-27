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

        $this->token = getenv('VALID_TOKEN_SKU_ADD');

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

    /**
     * @throws GuzzleException
     */
    public function testAddSKUSuccess(): void
    {
        $this->expectedStatusCode = '201';

        $this->builder
            ->given(
                'A SKU with skuIdD does not exist, a SKU Group with skuGroupId exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful POST request to /sku');

        $this->testSuccessResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized POST request to /sku');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_GROUP_GET');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /sku');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUUnprocessableEntity(): void
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

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUConflict(): void
    {
        // SKU with skuId already exists
        $this->requestData['skuId'] = 'skuId_test_duplicate';

        // Error code in response is 409
        $this->expectedStatusCode = '409';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('A SKU with skuId already exists')
            ->uponReceiving('POST request to /sku with already existent skuId');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUBadRequest(): void
    {
        // skuId is not defined
        unset($this->requestData['skuId']);

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad POST request to /sku');

        $this->testErrorResponse();
    }

}
