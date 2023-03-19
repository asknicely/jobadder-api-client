<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddCandidateUserTask extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $candidateId;
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\AddCandidateUserTaskCommand $command 
     */
    public function __construct(int $candidateId, \Varspool\JobAdder\V2\Model\AddCandidateUserTaskCommand $command)
    {
        $this->candidateId = $candidateId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}'), array($this->candidateId), '/candidates/{candidateId}/usertasks');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateUserTaskModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateUserTaskModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddCandidateUserTaskNotFoundException();
        }
    }
}