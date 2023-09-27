<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception;

class PostSkuNotFoundException extends NotFoundException
{
    /**
     * @var \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}