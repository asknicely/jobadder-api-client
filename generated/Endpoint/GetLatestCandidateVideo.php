<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetLatestCandidateVideo extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
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
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
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
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateVideoRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetLatestCandidateVideoNotFoundException();
        }
    }
}