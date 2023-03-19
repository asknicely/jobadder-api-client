<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetRequisitionAttachment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $requisitionId;
    protected $attachmentId;
    /**
     * 
     *
     * @param int $requisitionId Requisition Id
     * @param string $attachmentId Attachment Id
     */
    public function __construct(int $requisitionId, string $attachmentId)
    {
        $this->requisitionId = $requisitionId;
        $this->attachmentId = $attachmentId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{requisitionId}', '{attachmentId}'), array($this->requisitionId, $this->attachmentId), '/requisitions/{requisitionId}/attachments/{attachmentId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetRequisitionAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetRequisitionAttachmentNotFoundException();
        }
    }
}