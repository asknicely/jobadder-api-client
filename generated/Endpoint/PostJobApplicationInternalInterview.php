<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PostJobApplicationInternalInterview extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $applicationId;
    /**
     * 
     *
     * @param int $applicationId Application Id
     * @param \Varspool\JobAdder\V2\Model\AddJobApplicationInternalInterviewCommand $command 
     */
    public function __construct(int $applicationId, \Varspool\JobAdder\V2\Model\AddJobApplicationInternalInterviewCommand $command)
    {
        $this->applicationId = $applicationId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}'), array($this->applicationId), '/applications/{applicationId}/interviews/internal');
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
     * @throws \Varspool\JobAdder\V2\Exception\PostJobApplicationInternalInterviewBadRequestException
     * @throws \Varspool\JobAdder\V2\Exception\PostJobApplicationInternalInterviewNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\InterviewModel', 'json');
        }
        if (400 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PostJobApplicationInternalInterviewBadRequestException();
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PostJobApplicationInternalInterviewNotFoundException();
        }
    }
}