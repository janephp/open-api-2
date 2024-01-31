<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class Info extends \ArrayObject
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
     * A unique and precise title of the API.
     *
     * @var string|null
     */
    protected $title;
    /**
     * A semantic version number of the API.
     *
     * @var string|null
     */
    protected $version;
    /**
     * A longer description of the API. Should be different from the title.  GitHub Flavored Markdown is allowed.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The terms of service for the API.
     *
     * @var string|null
     */
    protected $termsOfService;
    /**
     * Contact information for the owners of the API.
     *
     * @var Contact|null
     */
    protected $contact;
    /**
     * 
     *
     * @var License|null
     */
    protected $license;
    /**
     * A unique and precise title of the API.
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * A unique and precise title of the API.
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * A semantic version number of the API.
     *
     * @return string|null
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * A semantic version number of the API.
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * A longer description of the API. Should be different from the title.  GitHub Flavored Markdown is allowed.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * A longer description of the API. Should be different from the title.  GitHub Flavored Markdown is allowed.
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
     * The terms of service for the API.
     *
     * @return string|null
     */
    public function getTermsOfService() : ?string
    {
        return $this->termsOfService;
    }
    /**
     * The terms of service for the API.
     *
     * @param string|null $termsOfService
     *
     * @return self
     */
    public function setTermsOfService(?string $termsOfService) : self
    {
        $this->initialized['termsOfService'] = true;
        $this->termsOfService = $termsOfService;
        return $this;
    }
    /**
     * Contact information for the owners of the API.
     *
     * @return Contact|null
     */
    public function getContact() : ?Contact
    {
        return $this->contact;
    }
    /**
     * Contact information for the owners of the API.
     *
     * @param Contact|null $contact
     *
     * @return self
     */
    public function setContact(?Contact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return License|null
     */
    public function getLicense() : ?License
    {
        return $this->license;
    }
    /**
     * 
     *
     * @param License|null $license
     *
     * @return self
     */
    public function setLicense(?License $license) : self
    {
        $this->initialized['license'] = true;
        $this->license = $license;
        return $this;
    }
}