<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddContactNote extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $contactId;
    /**
     * 
     *
     * @param int $contactId 
     * @param \Varspool\JobAdder\V2\Model\AddContactNoteCommand $body 
     */
    public function __construct(int $contactId, \Varspool\JobAdder\V2\Model\AddContactNoteCommand $body)
    {
        $this->contactId = $contactId;
        $this->body = $body;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{contactId}'), array($this->contactId), '/contacts/{contactId}/notes');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddContactNoteNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\NoteModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\NoteModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddContactNoteNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}