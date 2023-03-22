<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddPlacementUserTask extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $placementId;
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param \Varspool\JobAdder\V2\Model\AddPlacementUserTaskCommand $command 
     */
    public function __construct(int $placementId, \Varspool\JobAdder\V2\Model\AddPlacementUserTaskCommand $command)
    {
        $this->placementId = $placementId;
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{placementId}'), array($this->placementId), '/placements/{placementId}/usertasks');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddPlacementUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementUserTaskModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\PlacementUserTaskModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddPlacementUserTaskNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}