<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetContactStatusList extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $statusId 
     *     @var string $name 
     *     @var bool $active 
     *     @var bool $default 
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/contacts/lists/status';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('statusId', 'name', 'active', 'default'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('statusId', array('array'));
        $optionsResolver->addAllowedTypes('name', array('string'));
        $optionsResolver->addAllowedTypes('active', array('bool'));
        $optionsResolver->addAllowedTypes('default', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusListRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\StatusListRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}