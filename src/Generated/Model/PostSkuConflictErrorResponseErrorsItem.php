<?php

namespace Datenkraft\Backbone\Client\SkuCatalogApi\Generated\Model;

class PostSkuConflictErrorResponseErrorsItem
{
    /**
     * Code
     *
     * @var string
     */
    protected $code;
    /**
     * Message
     *
     * @var string
     */
    protected $message;
    /**
     * Extra
     *
     * @var PostSkuConflictErrorResponseErrorsItemextra
     */
    protected $extra;
    /**
     * Code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Message
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Message
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Extra
     *
     * @return PostSkuConflictErrorResponseErrorsItemextra
     */
    public function getExtra() : PostSkuConflictErrorResponseErrorsItemextra
    {
        return $this->extra;
    }
    /**
     * Extra
     *
     * @param PostSkuConflictErrorResponseErrorsItemextra $extra
     *
     * @return self
     */
    public function setExtra(PostSkuConflictErrorResponseErrorsItemextra $extra) : self
    {
        $this->extra = $extra;
        return $this;
    }
}