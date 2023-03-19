<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PutContactStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $contactId;
    /**
     * Change the contact status and add an optional note
     *
     * @param int $contactId 
     * @param \Varspool\JobAdder\V2\Model\SetContactStatusCommand $body 
     */
    public function __construct(int $contactId, \Varspool\JobAdder\V2\Model\SetContactStatusCommand $body)
    {
        $this->contactId = $contactId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{contactId}'), array($this->contactId), '/contacts/{contactId}/status');
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
     * @throws \Varspool\JobAdder\V2\Exception\PutContactStatusNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PutContactStatusUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (202 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutContactStatusNotFoundException();
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutContactStatusUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}