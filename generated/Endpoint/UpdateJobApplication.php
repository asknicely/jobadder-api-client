<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateJobApplication extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $applicationId;
    /**
     * Update job application status and custom fields
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationCommand $body 
     */
    public function __construct(int $applicationId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationCommand $body)
    {
        $this->applicationId = $applicationId;
        $this->body = $body;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}'), array($this->applicationId), '/applications/{applicationId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobApplicationNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobApplicationUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateJobApplicationNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateJobApplicationUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}