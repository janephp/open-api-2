<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Endpoint;

class TestGetWithUppercasePathParameters extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    protected $TestParameter;
    /**
     * 
     *
     * @param string $testParameter 
     */
    public function __construct(string $testParameter)
    {
        $this->TestParameter = $testParameter;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{TestParameter}'), array($this->TestParameter), '/test-uppercase-path-parameters/{TestParameter}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}