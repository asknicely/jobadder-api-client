<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddCandidateVideo extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $candidateId;
    protected $videoType;
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param string $videoType 
     * @param \Varspool\JobAdder\V2\Model\AddCandidateVideoCommand $body 
     */
    public function __construct(int $candidateId, string $videoType, \Varspool\JobAdder\V2\Model\AddCandidateVideoCommand $body)
    {
        $this->candidateId = $candidateId;
        $this->videoType = $videoType;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}', '{videoType}'), array($this->candidateId, $this->videoType), '/candidates/{candidateId}/videos/{videoType}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateVideoNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateVideoModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddCandidateVideoNotFoundException();
        }
    }
}