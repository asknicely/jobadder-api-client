<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateCandidate extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $candidateId;
    /**
     * 
     *
     * @param int $candidateId 
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidateCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     */
    public function __construct(int $candidateId, \Varspool\JobAdder\V2\Model\UpdateCandidateCommand $body, array $headerParameters = array())
    {
        $this->candidateId = $candidateId;
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
        return str_replace(array('{candidateId}'), array($this->candidateId), '/candidates/{candidateId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateConflictException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateUnprocessableEntityException
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
            throw new \Varspool\JobAdder\V2\Exception\UpdateCandidateNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCandidateConflictException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCandidateUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}