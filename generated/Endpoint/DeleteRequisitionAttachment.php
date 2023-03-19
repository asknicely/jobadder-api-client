<?php

namespace Varspool\JobAdder\V2\Endpoint;

class DeleteRequisitionAttachment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $requisitionId;
    protected $attachmentId;
    /**
     * 
     *
     * @param int $requisitionId Requisition Id
     * @param string $attachmentId 
     */
    public function __construct(int $requisitionId, string $attachmentId)
    {
        $this->requisitionId = $requisitionId;
        $this->attachmentId = $attachmentId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{requisitionId}', '{attachmentId}'), array($this->requisitionId, $this->attachmentId), '/requisitions/{requisitionId}/attachments/{attachmentId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\DeleteRequisitionAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\DeleteRequisitionAttachmentNotFoundException();
        }
    }
}