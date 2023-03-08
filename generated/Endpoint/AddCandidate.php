<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddCandidate extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddCandidateCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     */
    public function __construct(\Varspool\JobAdder\V2\Model\AddCandidateCommand $body, array $headerParameters = array())
    {
        $this->body = $body;
        $this->headerParameters = $headerParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/candidates';
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
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateConflictException
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateRepresentation', 'json');
        }
        if (409 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddCandidateConflictException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddCandidateUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}