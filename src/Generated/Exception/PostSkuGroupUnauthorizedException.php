<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception;

class PostSkuGroupUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unauthorized');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}