<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddContactUserTask extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $contactId;
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param \Varspool\JobAdder\V2\Model\AddContactUserTaskCommand $command 
     */
    public function __construct(int $contactId, \Varspool\JobAdder\V2\Model\AddContactUserTaskCommand $command)
    {
        $this->contactId = $contactId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{contactId}'), array($this->contactId), '/contacts/{contactId}/usertasks');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddContactUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactUserTaskModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ContactUserTaskModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddContactUserTaskNotFoundException();
        }
    }
}