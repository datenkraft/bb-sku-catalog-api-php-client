<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception;

class PostSkuConflictException extends ConflictException
{
    private $postSkuConflictErrorResponse;
    public function __construct(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuConflictErrorResponse $postSkuConflictErrorResponse)
    {
        parent::__construct('Conflict', 409);
        $this->postSkuConflictErrorResponse = $postSkuConflictErrorResponse;
    }
    public function getPostSkuConflictErrorResponse()
    {
        return $this->postSkuConflictErrorResponse;
    }
}