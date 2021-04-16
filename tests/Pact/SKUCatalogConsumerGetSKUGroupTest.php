<?php

namespace Pact;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use PhpPact\Consumer\Model\ConsumerRequest;
use PhpPact\Consumer\Model\ProviderResponse;

/**
 * Class SKUCatalogConsumerAddSKUTest
 * @package Pact
 */
class SKUCatalogConsumerGetSKUGroupTest extends SKUCatalogConsumerTest
{
    protected int $skuGroupIdValid;
    protected int $skuGroupIdInvalid;

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

        $this->skuGroupIdValid = 1;
        $this->skuGroupIdInvalid = 0;

        $this->requestData = [];
        $this->responseData = [
            'skuGroupId' => 1,
            'name' => 'Test group name',
        ];

        $this->path = '/sku-group/' . $this->skuGroupIdValid;
    }

//    /**
//     * @throws GuzzleException
//     */
//    public function testGetSKUSuccess()
//    {
//        $this->expectedStatusCode = '200';
//
//        $this->builder
//            ->given(
//                'A SKU with skuIdD exists, ' .
//                'the request is valid, the token is valid and has a valid scope'
//            )
//            ->uponReceiving('Successful GET request to /sku/{skuId}');
//
//        $this->testSuccessResponse();
//
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testGetSKUUnauthorized()
//    {
//        // Invalid token
//        $this->token = 'invalid_token';
//
//        // Error code in response is 401
//        $this->expectedStatusCode = '401';
//        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;
//
//        $this->builder
//            ->given('The token is invalid')
//            ->uponReceiving('Unauthorized GET request to /sku/{skuId}');
//
//        $this->testErrorResponse();
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testGetSKUForbidden()
//    {
//        // Token with invalid scope
//        $this->token = 'valid_token_invalid_scope';
//
//        // Error code in response is 403
//        $this->expectedStatusCode = '403';
//        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;
//
//        $this->builder
//            ->given('The request is valid, the token is valid with an invalid scope')
//            ->uponReceiving('Forbidden GET request to /sku/{skuId}');
//
//        $this->testErrorResponse();
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testGetSKUNotFound()
//    {
//        // Path with SKU-ID for non existent SKU
//        $this->path = '/sku/' . $this->skuIdInvalid;
//
//        // Error code in response is 404
//        $this->expectedStatusCode = '404';
//        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;
//
//        $this->builder
//            ->given(
//                'A SKU with skuId does not exist and ' .
//                'the request is valid, the token is valid with an invalid scope'
//            )
//            ->uponReceiving('Not Found GET request to /sku/{skuId}');
//
//        $this->testErrorResponse();
//    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupSuccess()
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A SKU Group with skuGroupIdD exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /sku-group/{skuGroupId}');

        $this->testSuccessResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupUnauthorized()
    {
        // Invalid token
        $this->token = 'invalid_token';

        // Error code in response is 401
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /sku-group/{skuGroupId}');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupForbidden()
    {
        // Token with invalid scope
        $this->token = 'valid_token_invalid_scope';

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /sku-group/{skuGroupId}');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupNotFound()
    {
        // Path with skuGroupID for non existent SKU Group
        $this->path = '/sku/' . $this->skuGroupIdInvalid;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given(
                'A SKU Group with skuGroupId does not exist and ' .
                'the request is valid, the token is valid with an invalid scope'
            )
            ->uponReceiving('Not Found GET request to /sku-group/{skuGroupId}');

        $this->testErrorResponse();
    }
}
