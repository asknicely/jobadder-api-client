<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateCandidateUserTask extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $candidateId;
    protected $taskId;
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidateUserTaskCommand $command 
     */
    public function __construct(int $candidateId, int $taskId, \Varspool\JobAdder\V2\Model\UpdateCandidateUserTaskCommand $command)
    {
        $this->candidateId = $candidateId;
        $this->taskId = $taskId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}', '{taskId}'), array($this->candidateId, $this->taskId), '/candidates/{candidateId}/usertasks/{taskId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateUserTaskModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateUserTaskModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCandidateUserTaskNotFoundException();
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCandidateUserTaskUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}