<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class PathItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $dollarRef;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $get;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $put;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $post;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $delete;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $options;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $head;
    /**
     * 
     *
     * @var Operation|null
     */
    protected $patch;
    /**
     * The parameters needed to send a valid API call.
     *
     * @var BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]|JsonReference[]|null
     */
    protected $parameters;
    /**
     * 
     *
     * @return string|null
     */
    public function getDollarRef() : ?string
    {
        return $this->dollarRef;
    }
    /**
     * 
     *
     * @param string|null $dollarRef
     *
     * @return self
     */
    public function setDollarRef(?string $dollarRef) : self
    {
        $this->initialized['dollarRef'] = true;
        $this->dollarRef = $dollarRef;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getGet() : ?Operation
    {
        return $this->get;
    }
    /**
     * 
     *
     * @param Operation|null $get
     *
     * @return self
     */
    public function setGet(?Operation $get) : self
    {
        $this->initialized['get'] = true;
        $this->get = $get;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getPut() : ?Operation
    {
        return $this->put;
    }
    /**
     * 
     *
     * @param Operation|null $put
     *
     * @return self
     */
    public function setPut(?Operation $put) : self
    {
        $this->initialized['put'] = true;
        $this->put = $put;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getPost() : ?Operation
    {
        return $this->post;
    }
    /**
     * 
     *
     * @param Operation|null $post
     *
     * @return self
     */
    public function setPost(?Operation $post) : self
    {
        $this->initialized['post'] = true;
        $this->post = $post;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getDelete() : ?Operation
    {
        return $this->delete;
    }
    /**
     * 
     *
     * @param Operation|null $delete
     *
     * @return self
     */
    public function setDelete(?Operation $delete) : self
    {
        $this->initialized['delete'] = true;
        $this->delete = $delete;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getOptions() : ?Operation
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param Operation|null $options
     *
     * @return self
     */
    public function setOptions(?Operation $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getHead() : ?Operation
    {
        return $this->head;
    }
    /**
     * 
     *
     * @param Operation|null $head
     *
     * @return self
     */
    public function setHead(?Operation $head) : self
    {
        $this->initialized['head'] = true;
        $this->head = $head;
        return $this;
    }
    /**
     * 
     *
     * @return Operation|null
     */
    public function getPatch() : ?Operation
    {
        return $this->patch;
    }
    /**
     * 
     *
     * @param Operation|null $patch
     *
     * @return self
     */
    public function setPatch(?Operation $patch) : self
    {
        $this->initialized['patch'] = true;
        $this->patch = $patch;
        return $this;
    }
    /**
     * The parameters needed to send a valid API call.
     *
     * @return BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]|JsonReference[]|null
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    /**
     * The parameters needed to send a valid API call.
     *
     * @param BodyParameter[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]|PathParameterSubSchema[]|JsonReference[]|null $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters) : self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
}