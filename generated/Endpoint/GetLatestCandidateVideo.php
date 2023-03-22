<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetLatestCandidateVideo extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $candidateId;
    protected $videoType;
    /**
     * 
     *
     * @param int $candidateId 
     * @param string $videoType 
     */
    public function __construct(int $candidateId, string $videoType)
    {
        $this->candidateId = $candidateId;
        $this->videoType = $videoType;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}', '{videoType}'), array($this->candidateId, $this->videoType), '/candidates/{candidateId}/videos/{videoType}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetLatestCandidateVideoNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateVideoRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetLatestCandidateVideoNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}