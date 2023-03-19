<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PutExternalInterviewEvaluation extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $interviewId;
    protected $applicationId;
    protected $contactId;
    /**
     * 
     *
     * @param int $interviewId 
     * @param int $applicationId 
     * @param int $contactId 
     * @param \Varspool\JobAdder\V2\Model\SubmitInterviewEvaluationCommand $command 
     */
    public function __construct(int $interviewId, int $applicationId, int $contactId, \Varspool\JobAdder\V2\Model\SubmitInterviewEvaluationCommand $command)
    {
        $this->interviewId = $interviewId;
        $this->applicationId = $applicationId;
        $this->contactId = $contactId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{interviewId}', '{applicationId}', '{contactId}'), array($this->interviewId, $this->applicationId, $this->contactId), '/interviews/{interviewId}/{applicationId}/evaluations/external/{contactId}');
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
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewEvaluationRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\InterviewEvaluationRepresentation', 'json');
        }
    }
}