<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateContactAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $contactId;
    protected $attach;
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdateContactAttachmentCommand $command 
     */
    public function __construct(int $contactId, int $attach, \Varspool\JobAdder\V2\Model\UpdateContactAttachmentCommand $command)
    {
        $this->contactId = $contactId;
        $this->attach = $attach;
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{contactId}', '{attach}'), array($this->contactId, $this->attach), '/contacts/{contactId}/attachments/{attach}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateContactAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}