<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetInternalInterviewEvaluation extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $interviewId;
    protected $applicationId;
    protected $userId;
    /**
     * 
     *
     * @param int $interviewId 
     * @param int $applicationId 
     * @param int $userId 
     */
    public function __construct(int $interviewId, int $applicationId, int $userId)
    {
        $this->interviewId = $interviewId;
        $this->applicationId = $applicationId;
        $this->userId = $userId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{interviewId}', '{applicationId}', '{userId}'), array($this->interviewId, $this->applicationId, $this->userId), '/interviews/{interviewId}/{applicationId}/evaluations/internal/{userId}');
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