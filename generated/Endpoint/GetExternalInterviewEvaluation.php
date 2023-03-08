<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetExternalInterviewEvaluation extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
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
     */
    public function __construct(int $interviewId, int $applicationId, int $contactId)
    {
        $this->interviewId = $interviewId;
        $this->applicationId = $applicationId;
        $this->contactId = $contactId;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{interviewId}', '{applicationId}', '{contactId}'), array($this->interviewId, $this->applicationId, $this->contactId), '/interviews/{interviewId}/{applicationId}/evaluations/external/{contactId}');
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\InterviewEvaluationRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}