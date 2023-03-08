<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PostJobApplicationInternalInterview extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
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
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\InterviewModel', 'json');
        }
        if (400 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PostJobApplicationInternalInterviewBadRequestException($response);
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PostJobApplicationInternalInterviewNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}