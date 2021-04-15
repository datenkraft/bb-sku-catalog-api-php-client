<?php

namespace Pact;

use Exception;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use PhpPact\Consumer\InteractionBuilder;
use PhpPact\Standalone\MockService\MockServerEnvConfig;
use PHPUnit\Framework\TestCase;
use PhpPact\Consumer\Model\ConsumerRequest;
use PhpPact\Consumer\Model\ProviderResponse;
use GuzzleHttp\Client;

/**
 * Class SKUCatalogConsumerTest
 */
class _SKUCatalogConsumerTest extends TestCase
{

    protected InteractionBuilder $builder;
    protected MockServerEnvConfig $config;
    protected array $sku;
    protected array $skuGroupRequest;
    protected array $skuGroupResponse;
    protected string $token;
    protected array $errorResponse;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Initialize the config of the mock server from environment variables
        $this->config = new MockServerEnvConfig();

        // Try to open a connection to the mock server to verify that it was started with the PactTestListener
        try {
            fsockopen($this->config->getHost(), $this->config->getPort());
        } catch (Exception $exception) {
            throw new Exception(
                'Mock server not running. Make sure the Testsuite was started with the PactTestListener.'
            );
        }

        // Create the interaction builder
        $this->builder = new InteractionBuilder($this->config);

        // Example SKU data for testing
        $this->sku = [
            'skuId' => 'skuId_test',
            'skuGroupId' => 1,
            'name' => 'Test sku name'
        ];

        // Example SKU Group data for testing
        $this->skuGroupRequest = [
            'name' => 'Test group name'
        ];
        $this->skuGroupResponse = [
            'skuGroupId' => 1,
            'name' => $this->skuGroupRequest['name'],
        ];

        // Example error response for testing
        $this->errorResponse = [
            'code' => '0',
            'message' => 'Example error message',
        ];

        // Authorization token for the request header
        // To be replaced by an actually valid token later to successfully verify the contract with the provider
        $this->token = 'valid_token';
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // Verify that all registered interactions actually took place
        $this->builder->verify();
    }

//    // POST /sku
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUSuccess()
//    {
//        // Consumer request
//        $request = new ConsumerRequest();
//        $request
//            ->setMethod('POST')
//            ->setPath('/sku')
//            ->addHeader('Authorization', 'Bearer ' . $this->token)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody($this->sku);
//
//        // Provider response (mocked)
//        $response = new ProviderResponse();
//        $response
//            ->setStatus(201)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody($this->sku);
//
//        // Build and register the interaction
//        $this->builder
//            ->given(
//                'A SKU with skuIdD does not exist, a SKU Group with skuGroupId exists, ' .
//                'the request is valid, the token is valid and has a valid scope'
//            )
//            ->uponReceiving('Successful POST request to /sku')
//            ->with($request)
//            ->willRespondWith($response);
//
//        // Make the request
//        // Uses GuzzleHttp/Client for now, to be replaced with real method(s) when the PHP client is implemented
//        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
//        $response = $httpClient->request(
//            'POST',
//            '/sku',
//            [
//                'headers' => [
//                    'Content-Type' => 'application/json',
//                    'Authorization' => 'Bearer ' . $this->token
//                ],
//                'body' => json_encode($this->sku)
//            ]
//        );
//
//        // Make assertions that the expected data in the response is correct
//        $this->assertEquals(201, $response->getStatusCode());
//        $this->assertJson($response->getBody());
//        $this->assertEquals($this->sku, json_decode($response->getBody()));
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
//        // Error code in response is 401
//        $this->errorResponse['code'] = '401';
//
//        $request = new ConsumerRequest();
//        $request
//            ->setMethod('POST')
//            ->setPath('/sku')
//            ->addHeader('Authorization', 'Bearer ' . $this->token)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody($this->sku);
//
//        $response = new ProviderResponse();
//        $response
//            ->setStatus(401)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody(['errors' => [$this->errorResponse]]);
//
//        $this->builder
//            ->given('The token is invalid')
//            ->uponReceiving('Unauthorized POST request to /sku')
//            ->with($request)
//            ->willRespondWith($response);
//
//        // The request should throw an Exception, because the server sends a 401
//        $this->expectException(ClientException::class);
//        $this->expectExceptionMessageMatches('~401~');
//
//        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
//        $httpClient->request(
//            'POST',
//            '/sku',
//            [
//                'headers' => [
//                    'Content-Type' => 'application/json',
//                    'Authorization' => 'Bearer ' . $this->token
//                ],
//                'body' => json_encode($this->sku)
//            ]
//        );
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
//        // Error code in response is 403
//        $this->errorResponse['code'] = '403';
//
//        $request = new ConsumerRequest();
//        $request
//            ->setMethod('POST')
//            ->setPath('/sku')
//            ->addHeader('Authorization', 'Bearer ' . $this->token)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody($this->sku);
//
//        $response = new ProviderResponse();
//        $response
//            ->setStatus(403)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody(['errors' => [$this->errorResponse]]);
//
//        $this->builder
//            ->given('The request is valid, the token is valid with an invalid scope')
//            ->uponReceiving('Forbidden POST request to /sku')
//            ->with($request)
//            ->willRespondWith($response);
//
//        // The request should throw an Exception, because the server sends a 403
//        $this->expectException(ClientException::class);
//        $this->expectExceptionMessageMatches('~403~');
//
//        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
//        $httpClient->request(
//            'POST',
//            '/sku',
//            [
//                'headers' => [
//                    'Content-Type' => 'application/json',
//                    'Authorization' => 'Bearer ' . $this->token
//                ],
//                'body' => json_encode($this->sku)
//            ]
//        );
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUUnprocessableEntity()
//    {
//        // SKU Group with skuGroupId does not exist
//        $this->sku['skuGroupId'] = 0;
//
//        // Error code in response is 422
//        $this->errorResponse['code'] = '422';
//
//        $request = new ConsumerRequest();
//        $request
//            ->setMethod('POST')
//            ->setPath('/sku')
//            ->addHeader('Authorization', 'Bearer ' . $this->token)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody($this->sku);
//
//        $response = new ProviderResponse();
//        $response
//            ->setStatus(422)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody(['errors' => [$this->errorResponse]]);
//
//        $this->builder
//            ->given('The SKU Group with skuGroupId does not exist')
//            ->uponReceiving('POST request to /sku with non-existent skuGroupId')
//            ->with($request)
//            ->willRespondWith($response);
//
//        // The request should throw an Exception, because the server sends a 422
//        $this->expectException(ClientException::class);
//        $this->expectExceptionMessageMatches('~422~');
//
//        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
//        $httpClient->request(
//            'POST',
//            '/sku',
//            [
//                'headers' => [
//                    'Content-Type' => 'application/json',
//                    'Authorization' => 'Bearer ' . $this->token
//                ],
//                'body' => json_encode($this->sku)
//            ]
//        );
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUConflict()
//    {
//        // SKU with skuId already exists
//        $this->sku['skuId'] = 'skuId_test_duplicate';
//
//        // Error code in response is 409
//        $this->errorResponse['code'] = '409';
//
//        $request = new ConsumerRequest();
//        $request
//            ->setMethod('POST')
//            ->setPath('/sku')
//            ->addHeader('Authorization', 'Bearer ' . $this->token)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody($this->sku);
//
//        $response = new ProviderResponse();
//        $response
//            ->setStatus(409)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody(['errors' => [$this->errorResponse]]);
//
//        $this->builder
//            ->given('A SKU with skuId already exists')
//            ->uponReceiving('POST request to /sku with already existent skuId')
//            ->with($request)
//            ->willRespondWith($response);
//
//        // The request should throw an Exception, because the server sends a 409
//        $this->expectException(ClientException::class);
//        $this->expectExceptionMessageMatches('~409~');
//
//        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
//        $httpClient->request(
//            'POST',
//            '/sku',
//            [
//                'headers' => [
//                    'Content-Type' => 'application/json',
//                    'Authorization' => 'Bearer ' . $this->token
//                ],
//                'body' => json_encode($this->sku)
//            ]
//        );
//    }
//
//    /**
//     * @throws GuzzleException
//     */
//    public function testAddSKUBadRequest()
//    {
//        // skuId is not defined
//        unset($this->sku['skuId']);
//
//        // Error code in response is 400
//        $this->errorResponse['code'] = '400';
//
//        $request = new ConsumerRequest();
//        $request
//            ->setMethod('POST')
//            ->setPath('/sku')
//            ->addHeader('Authorization', 'Bearer ' . $this->token)
//            ->setBody(json_encode($this->sku));
//
//        $response = new ProviderResponse();
//        $response
//            ->setStatus(400)
//            ->addHeader('Content-Type', 'application/json')
//            ->setBody(['errors' => [$this->errorResponse]]);
//
//        $this->builder
//            ->given('The request body is invalid or missing')
//            ->uponReceiving('Bad POST request to /sku')
//            ->with($request)
//            ->willRespondWith($response);
//
//        // The request should throw an Exception, because the server sends a 400
//        $this->expectException(ClientException::class);
//        $this->expectExceptionMessageMatches('~400~');
//
//        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
//        $httpClient->request(
//            'POST',
//            '/sku',
//            [
//                'headers' => [
//                    'Authorization' => 'Bearer ' . $this->token
//                ],
//                'body' => json_encode($this->sku)
//            ]
//        );
//    }

    // GET /sku/{skuId}

    /**
     * @throws GuzzleException
     */
    public function testGetSKUSuccess()
    {
        $request = new ConsumerRequest();
        $request
            ->setMethod('GET')
            ->setPath('/sku/' . $this->sku['skuId'])
            ->addHeader('Authorization', 'Bearer ' . $this->token);

        $response = new ProviderResponse();
        $response
            ->setStatus(200)
            ->addHeader('Content-Type', 'application/json')
            ->setBody($this->sku);

        $this->builder
            ->given(
                'A SKU with skuIdD exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /sku/{skuId}')
            ->with($request)
            ->willRespondWith($response);

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $response = $httpClient->request(
            'GET',
            '/sku/' . $this->sku['skuId'],
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]
        );

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getBody());
        $this->assertEquals($this->sku, json_decode($response->getBody()));
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUUnauthorized()
    {
        // Invalid token
        $this->token = 'invalid_token';

        // Error code in response is 401
        $this->errorResponse['code'] = '401';

        $request = new ConsumerRequest();
        $request
            ->setMethod('GET')
            ->setPath('/sku/' . $this->sku['skuId'])
            ->addHeader('Authorization', 'Bearer ' . $this->token);

        $response = new ProviderResponse();
        $response
            ->setStatus(401)
            ->addHeader('Content-Type', 'application/json')
            ->setBody(['errors' => [$this->errorResponse]]);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /sku/{skuId}')
            ->with($request)
            ->willRespondWith($response);

        // The request should throw an Exception, because the server sends a 401
        $this->expectException(ClientException::class);
        $this->expectExceptionMessageMatches('~401~');

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $httpClient->request(
            'GET',
            '/sku/' . $this->sku['skuId'],
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]
        );
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUForbidden()
    {
        // Token with invalid scope
        $this->token = 'valid_token_invalid_scope';

        // Error code in response is 403
        $this->errorResponse['code'] = '403';

        $request = new ConsumerRequest();
        $request
            ->setMethod('GET')
            ->setPath('/sku/' . $this->sku['skuId'])
            ->addHeader('Authorization', 'Bearer ' . $this->token);

        $response = new ProviderResponse();
        $response
            ->setStatus(403)
            ->addHeader('Content-Type', 'application/json')
            ->setBody(['errors' => [$this->errorResponse]]);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /sku/{skuId}')
            ->with($request)
            ->willRespondWith($response);

        // The request should throw an Exception, because the server sends a 403
        $this->expectException(ClientException::class);
        $this->expectExceptionMessageMatches('~403~');

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $httpClient->request(
            'GET',
            '/sku/' . $this->sku['skuId'],
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]
        );
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUNotFound()
    {
        // SKU with skuId does not exist
        $this->sku['skuId'] = 'skuId_test_invalid';

        // Error code in response is 404
        $this->errorResponse['code'] = '404';

        $request = new ConsumerRequest();
        $request
            ->setMethod('GET')
            ->setPath('/sku/' . $this->sku['skuId'])
            ->addHeader('Authorization', 'Bearer ' . $this->token);

        $response = new ProviderResponse();
        $response
            ->setStatus(404)
            ->addHeader('Content-Type', 'application/json')
            ->setBody(['errors' => [$this->errorResponse]]);

        $this->builder
            ->given(
                'A SKU with skuId does not exist and ' .
                'the request is valid, the token is valid with an invalid scope'
            )
            ->uponReceiving('Not Found GET request to /sku/{skuId}')
            ->with($request)
            ->willRespondWith($response);

        // The request should throw an Exception, because the server sends a 404
        $this->expectException(ClientException::class);
        $this->expectExceptionMessageMatches('~404~');

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $httpClient->request(
            'GET',
            '/sku/' . $this->sku['skuId'],
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]
        );
    }

    // POST /sku-group

    /**
     * @throws GuzzleException
     */
    public function testAddSKUGroupSuccess()
    {
        // Consumer request
        $request = new ConsumerRequest();
        $request
            ->setMethod('POST')
            ->setPath('/sku-group')
            ->addHeader('Authorization', 'Bearer ' . $this->token)
            ->addHeader('Content-Type', 'application/json')
            ->setBody($this->skuGroupRequest);

        // Provider response (mocked)
        $response = new ProviderResponse();
        $response
            ->setStatus(201)
            ->addHeader('Content-Type', 'application/json')
            ->setBody($this->skuGroupResponse);

        // Build and register the interaction
        $this->builder
            ->given(
                'The request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful POST request to /sku-group')
            ->with($request)
            ->willRespondWith($response);

        // Make the request
        // Uses GuzzleHttp/Client for now, to be replaced with real method(s) when the PHP client is implemented
        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $response = $httpClient->request(
            'POST',
            '/sku-group',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->token
                ],
                'body' => json_encode($this->skuGroupRequest)
            ]
        );

        // Make assertions that the expected data in the response is correct
        $this->assertEquals(201, $response->getStatusCode());
        $this->assertJson($response->getBody());
        $this->assertEquals($this->skuGroupRequest['name'], json_decode($response->getBody())->name);
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUGroupUnauthorized()
    {
        // Invalid token
        $this->token = 'invalid_token';

        // Error code in response is 401
        $this->errorResponse['code'] = '401';

        $request = new ConsumerRequest();
        $request
            ->setMethod('POST')
            ->setPath('/sku-group')
            ->addHeader('Authorization', 'Bearer ' . $this->token)
            ->addHeader('Content-Type', 'application/json')
            ->setBody($this->skuGroupRequest);

        $response = new ProviderResponse();
        $response
            ->setStatus(401)
            ->addHeader('Content-Type', 'application/json')
            ->setBody(['errors' => [$this->errorResponse]]);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized POST request to /sku-group')
            ->with($request)
            ->willRespondWith($response);

        // The request should throw an Exception, because the server sends a 401
        $this->expectException(ClientException::class);
        $this->expectExceptionMessageMatches('~401~');

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $httpClient->request(
            'POST',
            '/sku-group',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->token
                ],
                'body' => json_encode($this->skuGroupRequest)
            ]
        );
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUGroupForbidden()
    {
        // Token with invalid scope
        $this->token = 'valid_token_invalid_scope';

        // Error code in response is 403
        $this->errorResponse['code'] = '403';

        $request = new ConsumerRequest();
        $request
            ->setMethod('POST')
            ->setPath('/sku-group')
            ->addHeader('Authorization', 'Bearer ' . $this->token)
            ->addHeader('Content-Type', 'application/json')
            ->setBody($this->skuGroupRequest);

        $response = new ProviderResponse();
        $response
            ->setStatus(403)
            ->addHeader('Content-Type', 'application/json')
            ->setBody(['errors' => [$this->errorResponse]]);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /sku-group')
            ->with($request)
            ->willRespondWith($response);

        // The request should throw an Exception, because the server sends a 403
        $this->expectException(ClientException::class);
        $this->expectExceptionMessageMatches('~403~');

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $httpClient->request(
            'POST',
            '/sku-group',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->token
                ],
                'body' => json_encode($this->skuGroupRequest)
            ]
        );
    }

    /**
     * @throws GuzzleException
     */
    public function testAddSKUGroupBadRequest()
    {
        // name is not defined
        unset($this->skuGroupRequest['name']);

        // Error code in response is 400
        $this->errorResponse['code'] = '400';

        $request = new ConsumerRequest();
        $request
            ->setMethod('POST')
            ->setPath('/sku-group')
            ->addHeader('Authorization', 'Bearer ' . $this->token)
            ->setBody($this->skuGroupRequest);

        $response = new ProviderResponse();
        $response
            ->setStatus(400)
            ->addHeader('Content-Type', 'application/json')
            ->setBody(['errors' => [$this->errorResponse]]);

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad POST request to /sku-group')
            ->with($request)
            ->willRespondWith($response);

        // The request should throw an Exception, because the server sends a 400
        $this->expectException(ClientException::class);
        $this->expectExceptionMessageMatches('~400~');

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $httpClient->request(
            'POST',
            '/sku-group',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ],
                'body' => json_encode($this->skuGroupRequest)
            ]
        );
    }

    // GET /sku-group/{skuGroupId}

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupSuccess()
    {
        $request = new ConsumerRequest();
        $request
            ->setMethod('GET')
            ->setPath('/sku-group/' . $this->skuGroupResponse['skuGroupId'])
            ->addHeader('Authorization', 'Bearer ' . $this->token);

        $response = new ProviderResponse();
        $response
            ->setStatus(200)
            ->addHeader('Content-Type', 'application/json')
            ->setBody($this->skuGroupResponse);

        $this->builder
            ->given(
                'A SKU Group with skuGroupIdD exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /sku-group/{skuGroupId}')
            ->with($request)
            ->willRespondWith($response);

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $response = $httpClient->request(
            'GET',
            '/sku-group/' . $this->skuGroupResponse['skuGroupId'],
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]
        );

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getBody());
        $this->assertEquals($this->skuGroupResponse, json_decode($response->getBody()));
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupUnauthorized()
    {
        // Invalid token
        $this->token = 'invalid_token';

        // Error code in response is 401
        $this->errorResponse['code'] = '401';

        $request = new ConsumerRequest();
        $request
            ->setMethod('GET')
            ->setPath('/sku-group/' . $this->skuGroupResponse['skuGroupId'])
            ->addHeader('Authorization', 'Bearer ' . $this->token);

        $response = new ProviderResponse();
        $response
            ->setStatus(401)
            ->addHeader('Content-Type', 'application/json')
            ->setBody(['errors' => [$this->errorResponse]]);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /sku-group/{skuGroupId}')
            ->with($request)
            ->willRespondWith($response);

        // The request should throw an Exception, because the server sends a 401
        $this->expectException(ClientException::class);
        $this->expectExceptionMessageMatches('~401~');

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $httpClient->request(
            'GET',
            '/sku-group/' . $this->skuGroupResponse['skuGroupId'],
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]
        );
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupForbidden()
    {
        // Token with invalid scope
        $this->token = 'valid_token_invalid_scope';

        // Error code in response is 403
        $this->errorResponse['code'] = '403';

        $request = new ConsumerRequest();
        $request
            ->setMethod('GET')
            ->setPath('/sku-group/' . $this->skuGroupResponse['skuGroupId'])
            ->addHeader('Authorization', 'Bearer ' . $this->token);

        $response = new ProviderResponse();
        $response
            ->setStatus(403)
            ->addHeader('Content-Type', 'application/json')
            ->setBody(['errors' => [$this->errorResponse]]);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /sku-group/{skuGroupId}')
            ->with($request)
            ->willRespondWith($response);

        // The request should throw an Exception, because the server sends a 403
        $this->expectException(ClientException::class);
        $this->expectExceptionMessageMatches('~403~');

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $httpClient->request(
            'GET',
            '/sku-group/' . $this->skuGroupResponse['skuGroupId'],
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]
        );
    }

    /**
     * @throws GuzzleException
     */
    public function testGetSKUGroupNotFound()
    {
        // SKU Group with skuGroupId does not exist
        $this->skuGroupResponse['skuGroupId'] = '0';

        // Error code in response is 404
        $this->errorResponse['code'] = '404';

        $request = new ConsumerRequest();
        $request
            ->setMethod('GET')
            ->setPath('/sku-group/' . $this->skuGroupResponse['skuGroupId'])
            ->addHeader('Authorization', 'Bearer ' . $this->token);

        $response = new ProviderResponse();
        $response
            ->setStatus(404)
            ->addHeader('Content-Type', 'application/json')
            ->setBody(['errors' => [$this->errorResponse]]);

        $this->builder
            ->given(
                'A SKU Group with skuGroupId does not exist and ' .
                'the request is valid, the token is valid with an invalid scope'
            )
            ->uponReceiving('Not Found GET request to /sku-group/{skuGroupId}')
            ->with($request)
            ->willRespondWith($response);

        // The request should throw an Exception, because the server sends a 404
        $this->expectException(ClientException::class);
        $this->expectExceptionMessageMatches('~404~');

        $httpClient = new Client(['base_uri' => $this->config->getBaseUri()]);
        $httpClient->request(
            'GET',
            '/sku/' . $this->sku['skuId'],
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]
        );
    }

}
