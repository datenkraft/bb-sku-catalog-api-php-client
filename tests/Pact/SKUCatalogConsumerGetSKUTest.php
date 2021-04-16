<?php

namespace Pact;

use Exception;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class SKUCatalogConsumerAddSKUTest
 * @package Pact
 */
class SKUCatalogConsumerAGetKUTest extends SKUCatalogConsumerTest
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

//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUSuccess()
//    {
//        $this->expectedStatusCode = 201;
//
//        $this->builder
//            ->given('A SKU with skuIdD does not exist, a SKU Group with skuGroupId exists, ' .
//                'the request is valid, the token is valid and has a valid scope')
//            ->uponReceiving('Successful POST request to /sku');
//
//        $this->testSuccessResponse();
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUUnauthorized()
//    {
//        // Invalid token
//        $this->token = 'invalid_token';
//
//        $this->expectedStatusCode = 401;
//        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;
//
//        $this->builder
//            ->given('The token is invalid')
//            ->uponReceiving('Unauthorized POST request to /sku');
//
//        $this->testErrorResponse();
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUForbidden()
//    {
//        // Token with invalid scope
//        $this->token = 'valid_token_invalid_scope';
//
//        $this->expectedStatusCode = 403;
//        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;
//
//        $this->builder
//            ->given('The request is valid, the token is valid with an invalid scope')
//            ->uponReceiving('Forbidden POST request to /sku');
//
//        $this->testErrorResponse();
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUUnprocessableEntity()
//    {
//        // SKU Group with skuGroupId does not exist
//        $this->requestData['skuGroupId'] = 0;
//
//        // Error code in response is 422
//        $this->expectedStatusCode = 422;
//        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;
//
//        $this->builder
//            ->given('The SKU Group with skuGroupId does not exist')
//            ->uponReceiving('POST request to /sku with non-existent skuGroupId');
//
//        $this->testErrorResponse();
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUConflict()
//    {
//        // SKU with skuId already exists
//        $this->requestData['skuId'] = 'skuId_test_duplicate';
//
//        // Error code in response is 409
//        $this->expectedStatusCode = 409;
//        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;
//
//        $this->builder
//            ->given('A SKU with skuId already exists')
//            ->uponReceiving('POST request to /sku with already existent skuId');
//
//        $this->testErrorResponse();
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUBadRequest()
//    {
//        // skuId is not defined
//        unset($this->requestData['skuId']);
//
//        // Error code in response is 400
//        $this->expectedStatusCode = 400;
//        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;
//
//        $this->builder
//            ->given('The request body is invalid or missing')
//            ->uponReceiving('Bad POST request to /sku');
//
//        $this->testErrorResponse();
//    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUSuccess()
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
    public function testGetSKUUnauthorized()
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
    public function testGetSKUForbidden()
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
    public function testGetSKUNotFound()
    {
        // Path with SKU-ID for non existent SKU
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
