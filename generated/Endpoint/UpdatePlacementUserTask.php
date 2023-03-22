<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdatePlacementUserTask extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $placementId;
    protected $taskId;
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePlacementUserTaskCommand $command 
     */
    public function __construct(int $placementId, int $taskId, \Varspool\JobAdder\V2\Model\UpdatePlacementUserTaskCommand $command)
    {
        $this->placementId = $placementId;
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
        return str_replace(array('{placementId}', '{taskId}'), array($this->placementId, $this->taskId), '/placements/{placementId}/usertasks/{taskId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePlacementUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePlacementUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementUserTaskModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\PlacementUserTaskModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdatePlacementUserTaskNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdatePlacementUserTaskUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}