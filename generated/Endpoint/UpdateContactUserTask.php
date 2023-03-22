<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateContactUserTask extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $contactId;
    protected $taskId;
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateContactUserTaskCommand $command 
     */
    public function __construct(int $contactId, int $taskId, \Varspool\JobAdder\V2\Model\UpdateContactUserTaskCommand $command)
    {
        $this->contactId = $contactId;
        $this->taskId = $taskId;
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{contactId}', '{taskId}'), array($this->contactId, $this->taskId), '/contacts/{contactId}/usertasks/{taskId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateContactUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactUserTaskModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ContactUserTaskModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateContactUserTaskNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateContactUserTaskUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}