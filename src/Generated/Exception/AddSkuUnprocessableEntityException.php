<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception;

class AddSkuUnprocessableEntityException extends UnprocessableEntityException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unprocessable Entity', 422);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}