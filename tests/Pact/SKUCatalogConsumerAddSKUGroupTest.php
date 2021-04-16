<?php

namespace Pact;

use Exception;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class SKUCatalogConsumerAddSKUTest
 * @package Pact
 */
class SKUCatalogConsumerAddSKUGroupTest extends SKUCatalogConsumerTest
{
    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'POST';

        $this->requestHeaders = [
            ['Authorization' => 'Bearer ' . $this->token],
            ['Content-Type' => 'application/json']
        ];
        $this->responseHeaders = [
            ['Content-Type' => 'application/json']
        ];

        $this->requestData = [
            'name' => 'Test group name'
        ];
        $this->responseData = [
            'skuGroupId' => 1,
            'name' => $this->requestData['name'],
        ];

        $this->path = '/sku-group';
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUGroupSuccess()
    {
        $this->expectedStatusCode = '201';

        $this->builder
            ->given(
                'The request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful POST request to /sku-group');

        $this->testSuccessResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUGroupUnauthorized()
    {
        // Invalid token
        $this->token = 'invalid_token';

        // Error code in response is 401
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized POST request to /sku-group');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUGroupForbidden()
    {
        // Token with invalid scope
        $this->token = 'valid_token_invalid_scope';

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /sku-group');

        $this->testErrorResponse();
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUGroupBadRequest()
    {
        // name is not defined
        unset($this->requestData['name']);

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = $this->expectedStatusCode;

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad POST request to /sku-group');

        $this->testErrorResponse();
    }
}
