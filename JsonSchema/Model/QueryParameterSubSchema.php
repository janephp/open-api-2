<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class QueryParameterSubSchema extends \ArrayObject
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
     * Determines whether or not this parameter is required or optional.
     *
     * @var bool|null
     */
    protected $required = false;
    /**
     * Determines the location of the parameter.
     *
     * @var string|null
     */
    protected $in;
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The name of the parameter.
     *
     * @var string|null
     */
    protected $name;
    /**
     * allows sending a parameter by name only or with an empty value.
     *
     * @var bool|null
     */
    protected $allowEmptyValue = false;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $format;
    /**
     * 
     *
     * @var PrimitivesItems|null
     */
    protected $items;
    /**
     * 
     *
     * @var string|null
     */
    protected $collectionFormat = 'csv';
    /**
     * 
     *
     * @var mixed|null
     */
    protected $default;
    /**
     * 
     *
     * @var float|null
     */
    protected $maximum;
    /**
     * 
     *
     * @var bool|null
     */
    protected $exclusiveMaximum = false;
    /**
     * 
     *
     * @var float|null
     */
    protected $minimum;
    /**
     * 
     *
     * @var bool|null
     */
    protected $exclusiveMinimum = false;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxLength;
    /**
     * 
     *
     * @var int|null
     */
    protected $minLength;
    /**
     * 
     *
     * @var string|null
     */
    protected $pattern;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxItems;
    /**
     * 
     *
     * @var int|null
     */
    protected $minItems;
    /**
     * 
     *
     * @var bool|null
     */
    protected $uniqueItems = false;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $enum;
    /**
     * 
     *
     * @var float|null
     */
    protected $multipleOf;
    /**
     * Determines whether or not this parameter is required or optional.
     *
     * @return bool|null
     */
    public function getRequired() : ?bool
    {
        return $this->required;
    }
    /**
     * Determines whether or not this parameter is required or optional.
     *
     * @param bool|null $required
     *
     * @return self
     */
    public function setRequired(?bool $required) : self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
    /**
     * Determines the location of the parameter.
     *
     * @return string|null
     */
    public function getIn() : ?string
    {
        return $this->in;
    }
    /**
     * Determines the location of the parameter.
     *
     * @param string|null $in
     *
     * @return self
     */
    public function setIn(?string $in) : self
    {
        $this->initialized['in'] = true;
        $this->in = $in;
        return $this;
    }
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The name of the parameter.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the parameter.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * allows sending a parameter by name only or with an empty value.
     *
     * @return bool|null
     */
    public function getAllowEmptyValue() : ?bool
    {
        return $this->allowEmptyValue;
    }
    /**
     * allows sending a parameter by name only or with an empty value.
     *
     * @param bool|null $allowEmptyValue
     *
     * @return self
     */
    public function setAllowEmptyValue(?bool $allowEmptyValue) : self
    {
        $this->initialized['allowEmptyValue'] = true;
        $this->allowEmptyValue = $allowEmptyValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return PrimitivesItems|null
     */
    public function getItems() : ?PrimitivesItems
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param PrimitivesItems|null $items
     *
     * @return self
     */
    public function setItems(?PrimitivesItems $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCollectionFormat() : ?string
    {
        return $this->collectionFormat;
    }
    /**
     * 
     *
     * @param string|null $collectionFormat
     *
     * @return self
     */
    public function setCollectionFormat(?string $collectionFormat) : self
    {
        $this->initialized['collectionFormat'] = true;
        $this->collectionFormat = $collectionFormat;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param mixed $default
     *
     * @return self
     */
    public function setDefault($default) : self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMaximum() : ?float
    {
        return $this->maximum;
    }
    /**
     * 
     *
     * @param float|null $maximum
     *
     * @return self
     */
    public function setMaximum(?float $maximum) : self
    {
        $this->initialized['maximum'] = true;
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getExclusiveMaximum() : ?bool
    {
        return $this->exclusiveMaximum;
    }
    /**
     * 
     *
     * @param bool|null $exclusiveMaximum
     *
     * @return self
     */
    public function setExclusiveMaximum(?bool $exclusiveMaximum) : self
    {
        $this->initialized['exclusiveMaximum'] = true;
        $this->exclusiveMaximum = $exclusiveMaximum;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMinimum() : ?float
    {
        return $this->minimum;
    }
    /**
     * 
     *
     * @param float|null $minimum
     *
     * @return self
     */
    public function setMinimum(?float $minimum) : self
    {
        $this->initialized['minimum'] = true;
        $this->minimum = $minimum;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getExclusiveMinimum() : ?bool
    {
        return $this->exclusiveMinimum;
    }
    /**
     * 
     *
     * @param bool|null $exclusiveMinimum
     *
     * @return self
     */
    public function setExclusiveMinimum(?bool $exclusiveMinimum) : self
    {
        $this->initialized['exclusiveMinimum'] = true;
        $this->exclusiveMinimum = $exclusiveMinimum;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxLength() : ?int
    {
        return $this->maxLength;
    }
    /**
     * 
     *
     * @param int|null $maxLength
     *
     * @return self
     */
    public function setMaxLength(?int $maxLength) : self
    {
        $this->initialized['maxLength'] = true;
        $this->maxLength = $maxLength;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinLength() : ?int
    {
        return $this->minLength;
    }
    /**
     * 
     *
     * @param int|null $minLength
     *
     * @return self
     */
    public function setMinLength(?int $minLength) : self
    {
        $this->initialized['minLength'] = true;
        $this->minLength = $minLength;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPattern() : ?string
    {
        return $this->pattern;
    }
    /**
     * 
     *
     * @param string|null $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern) : self
    {
        $this->initialized['pattern'] = true;
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxItems() : ?int
    {
        return $this->maxItems;
    }
    /**
     * 
     *
     * @param int|null $maxItems
     *
     * @return self
     */
    public function setMaxItems(?int $maxItems) : self
    {
        $this->initialized['maxItems'] = true;
        $this->maxItems = $maxItems;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinItems() : ?int
    {
        return $this->minItems;
    }
    /**
     * 
     *
     * @param int|null $minItems
     *
     * @return self
     */
    public function setMinItems(?int $minItems) : self
    {
        $this->initialized['minItems'] = true;
        $this->minItems = $minItems;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUniqueItems() : ?bool
    {
        return $this->uniqueItems;
    }
    /**
     * 
     *
     * @param bool|null $uniqueItems
     *
     * @return self
     */
    public function setUniqueItems(?bool $uniqueItems) : self
    {
        $this->initialized['uniqueItems'] = true;
        $this->uniqueItems = $uniqueItems;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getEnum() : ?array
    {
        return $this->enum;
    }
    /**
     * 
     *
     * @param mixed[]|null $enum
     *
     * @return self
     */
    public function setEnum(?array $enum) : self
    {
        $this->initialized['enum'] = true;
        $this->enum = $enum;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMultipleOf() : ?float
    {
        return $this->multipleOf;
    }
    /**
     * 
     *
     * @param float|null $multipleOf
     *
     * @return self
     */
    public function setMultipleOf(?float $multipleOf) : self
    {
        $this->initialized['multipleOf'] = true;
        $this->multipleOf = $multipleOf;
        return $this;
    }
}