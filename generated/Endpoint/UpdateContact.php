<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateContact extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $contactId;
    /**
     * 
     *
     * @param int $contactId 
     * @param \Varspool\JobAdder\V2\Model\UpdateContactCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     */
    public function __construct(int $contactId, \Varspool\JobAdder\V2\Model\UpdateContactCommand $body, array $headerParameters = array())
    {
        $this->contactId = $contactId;
        $this->body = $body;
        $this->headerParameters = $headerParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{contactId}'), array($this->contactId), '/contacts/{contactId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Allow-Duplicates'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('X-Allow-Duplicates', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactConflictException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateContactNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateContactConflictException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateContactUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}