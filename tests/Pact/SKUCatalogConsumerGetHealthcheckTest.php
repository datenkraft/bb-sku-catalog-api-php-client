<?php

namespace Pact;

use Exception;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class SKUCatalogConsumerAddSKUTest
 * @package Pact
 */
class SKUCatalogConsumerGetHealthcheckTest extends SKUCatalogConsumerTest
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

        $this->requestHeaders = [];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->requestData = [];
        $this->responseData = [
            'date' => $this->matcher->like(date('Y-m-d H:i:s')),
        ];

        $this->path = '/healthcheck';
    }

    /**
     * @throws GuzzleException
     */
    public function testGetHealthcheckSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given('The GET request is valid')
            ->uponReceiving('Successful GET request to /healthcheck');

        $this->testSuccessResponse();
    }
}
