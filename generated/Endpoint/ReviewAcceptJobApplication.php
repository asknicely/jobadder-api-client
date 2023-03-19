<?php

namespace Varspool\JobAdder\V2\Endpoint;

class ReviewAcceptJobApplication extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $applicationId;
    /**
     * 
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\ReviewAcceptJobApplicationCommand $body 
     */
    public function __construct(int $applicationId, \Varspool\JobAdder\V2\Model\ReviewAcceptJobApplicationCommand $body)
    {
        $this->applicationId = $applicationId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}'), array($this->applicationId), '/applications/{applicationId}/review/accept');
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
     * @throws \Varspool\JobAdder\V2\Exception\ReviewAcceptJobApplicationNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (202 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\ReviewAcceptJobApplicationNotFoundException();
        }
    }
}