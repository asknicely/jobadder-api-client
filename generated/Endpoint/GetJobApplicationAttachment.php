<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetJobApplicationAttachment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $applicationId;
    protected $attach;
    /**
     * Get a job application attachment.<br />Setting the Accept header will attempt a file conversion.
     *
     * @param int $applicationId Job Application Id
     * @param int $attach Attachment Id
     */
    public function __construct(int $applicationId, int $attach)
    {
        $this->applicationId = $applicationId;
        $this->attach = $attach;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}', '{attach}'), array($this->applicationId, $this->attach), '/applications/{applicationId}/attachments/{attach}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetJobApplicationAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetJobApplicationAttachmentNotFoundException();
        }
    }
}