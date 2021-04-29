<?php

namespace Pact;

use Exception;
use GuzzleHttp\Exception\GuzzleException;

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

        $this->token = getenv('VALID_TOKEN_SKU_GROUP_GET');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->skuGroupIdValid = 1;
        $this->skuGroupIdInvalid = 0;

        $this->requestData = [];
        $this->responseData = [
            'skuGroupId' => $this->matcher->like(1),
            'name' => 'SKU Group Test',
        ];

        $this->path = '/sku-group/' . $this->skuGroupIdValid;
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A SKU Group with skuGroupIdD exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /sku-group/{skuGroupId}');

        $this->executeTestSuccessResponse();
    }

    /**
     * @throws GuzzleException
     */
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

        $this->executeTestErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_ADD');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /sku-group/{skuGroupId}');

        $this->executeTestErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupNotFound(): void
    {
        // Path with skuGroupID for non existent SKU Group
        $this->path = '/sku-group/' . $this->skuGroupIdInvalid;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given(
                'A SKU Group with skuGroupId does not exist'
            )
            ->uponReceiving('Not Found GET request to /sku-group/{skuGroupId}');

        $this->executeTestErrorResponse();
    }
}
