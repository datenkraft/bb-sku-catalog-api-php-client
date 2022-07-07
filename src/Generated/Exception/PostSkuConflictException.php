<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception;

class PostSkuConflictException extends ConflictException
{
    /**
     * @var \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuConflictErrorResponse
     */
    private $postSkuConflictErrorResponse;
    public function __construct(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuConflictErrorResponse $postSkuConflictErrorResponse)
    {
        parent::__construct('Conflict');
        $this->postSkuConflictErrorResponse = $postSkuConflictErrorResponse;
    }
    public function getPostSkuConflictErrorResponse() : \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuConflictErrorResponse
    {
        return $this->postSkuConflictErrorResponse;
    }
}