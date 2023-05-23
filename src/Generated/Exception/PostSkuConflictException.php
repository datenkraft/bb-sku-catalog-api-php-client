<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Exception;

class PostSkuConflictException extends ConflictException
{
    /**
     * @var \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuConflictErrorResponse
     */
    private $postSkuConflictErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuConflictErrorResponse $postSkuConflictErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Conflict');
        $this->postSkuConflictErrorResponse = $postSkuConflictErrorResponse;
        $this->response = $response;
    }
    public function getPostSkuConflictErrorResponse() : \Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model\PostSkuConflictErrorResponse
    {
        return $this->postSkuConflictErrorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}