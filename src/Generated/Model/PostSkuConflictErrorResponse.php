<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class PostSkuConflictErrorResponse
{
    /**
     * errors
     *
     * @var PostSkuConflictErrorResponseErrorsItem[]
     */
    protected $errors;
    /**
     * errors
     *
     * @return PostSkuConflictErrorResponseErrorsItem[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * errors
     *
     * @param PostSkuConflictErrorResponseErrorsItem[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}