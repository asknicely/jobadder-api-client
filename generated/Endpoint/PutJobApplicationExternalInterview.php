<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PutJobApplicationExternalInterview extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
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
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}', '{interviewId}'), array($this->applicationId, $this->interviewId), '/applications/{applicationId}/interviews/external/{interviewId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationExternalInterviewBadRequestException
     * @throws \Varspool\JobAdder\V2\Exception\PutJobApplicationExternalInterviewNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\InterviewModel', 'json');
        }
        if (400 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutJobApplicationExternalInterviewBadRequestException($response);
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutJobApplicationExternalInterviewNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}