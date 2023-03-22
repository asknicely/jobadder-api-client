<?php

namespace Varspool\JobAdder\V2\Endpoint;

class ReviewRejectJobApplication extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $applicationId;
    /**
     * 
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\ReviewRejectJobApplicationCommand $body 
     */
    public function __construct(int $applicationId, \Varspool\JobAdder\V2\Model\ReviewRejectJobApplicationCommand $body)
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
        return str_replace(array('{applicationId}'), array($this->applicationId), '/applications/{applicationId}/review/reject');
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
     * @throws \Varspool\JobAdder\V2\Exception\ReviewRejectJobApplicationNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\ReviewRejectJobApplicationNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}