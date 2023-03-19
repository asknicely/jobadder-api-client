<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PutJobApplicationInternalInterview extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $applicationId;
    protected $interviewId;
    /**
     * 
     *
     * @param int $applicationId Application Id
     * @param int $interviewId Interview Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationInterviewCommand $command 
     */
    public function __construct(int $applicationId, int $interviewId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationInterviewCommand $command)
    {
        $this->applicationId = $applicationId;
        $this->interviewId = $interviewId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}', '{interviewId}'), array($this->applicationId, $this->interviewId), '/applications/{applicationId}/interviews/internal/{interviewId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationInternalInterviewBadRequestException
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationInternalInterviewNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\InterviewModel', 'json');
        }
        if (400 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutJobApplicationInternalInterviewBadRequestException();
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutJobApplicationInternalInterviewNotFoundException();
        }
    }
}