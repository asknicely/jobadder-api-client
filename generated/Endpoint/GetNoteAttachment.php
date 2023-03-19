<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetNoteAttachment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $noteId;
    protected $attachmentId;
    /**
     * 
     *
     * @param string $noteId Note Id
     * @param string $attachmentId Attachment Id
     */
    public function __construct(string $noteId, string $attachmentId)
    {
        $this->noteId = $noteId;
        $this->attachmentId = $attachmentId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{noteId}', '{attachmentId}'), array($this->noteId, $this->attachmentId), '/notes/{noteId}/attachments/{attachmentId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetNoteAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetNoteAttachmentNotFoundException();
        }
    }
}