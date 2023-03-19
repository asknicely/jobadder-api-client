<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateNote extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $noteId;
    /**
     * 
     *
     * @param string $noteId 
     * @param \Varspool\JobAdder\V2\Model\UpdateNoteCommand $body 
     */
    public function __construct(string $noteId, \Varspool\JobAdder\V2\Model\UpdateNoteCommand $body)
    {
        $this->noteId = $noteId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{noteId}'), array($this->noteId), '/notes/{noteId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateNoteNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateNoteNotFoundException();
        }
    }
}