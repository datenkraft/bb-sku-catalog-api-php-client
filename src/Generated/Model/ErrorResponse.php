<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class ErrorResponse
{
    /**
     * errors
     *
     * @var Error[]
     */
    protected $errors;
    /**
     * errors
     *
     * @return Error[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * errors
     *
     * @param Error[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}