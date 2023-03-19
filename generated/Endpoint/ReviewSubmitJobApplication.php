<?php

namespace Varspool\JobAdder\V2\Endpoint;

class ReviewSubmitJobApplication extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $applicationId;
    /**
     * 
     *
     * @param int $applicationId 
     * @param \Varspool\JobAdder\V2\Model\ReviewSubmitJobApplicationCommand $body 
     */
    public function __construct(int $applicationId, \Varspool\JobAdder\V2\Model\ReviewSubmitJobApplicationCommand $body)
    {
        $this->applicationId = $applicationId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}'), array($this->applicationId), '/applications/{applicationId}/review');
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
     * @throws \Varspool\JobAdder\V2\Exception\ReviewSubmitJobApplicationNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (202 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\ReviewSubmitJobApplicationNotFoundException();
        }
    }
}