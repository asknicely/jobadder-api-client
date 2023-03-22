<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetJobApplication extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $applicationId;
    /**
     * 
     *
     * @param int $applicationId Job Application Id
     */
    public function __construct(int $applicationId)
    {
        $this->applicationId = $applicationId;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}'), array($this->applicationId), '/applications/{applicationId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\GetJobApplicationNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetJobApplicationNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}