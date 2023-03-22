<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddUserTask extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Varspool\JobAdder\V2\Model\AddUserTaskCommand $command 
     */
    public function __construct(\Varspool\JobAdder\V2\Model\AddUserTaskCommand $command)
    {
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/usertasks';
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
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserTaskModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\UserTaskModel', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}