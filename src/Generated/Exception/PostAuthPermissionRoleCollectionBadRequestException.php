<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception;

class PostAuthPermissionRoleCollectionBadRequestException extends BadRequestException
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
        parent::__construct('Bad Request

Error codes:
- DATA_INVALID: Invalid data was given.');
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