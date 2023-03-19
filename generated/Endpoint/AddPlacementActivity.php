<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddPlacementActivity extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $placementId;
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param \Varspool\JobAdder\V2\Model\AddPlacementActivityCommand $command 
     */
    public function __construct(int $placementId, \Varspool\JobAdder\V2\Model\AddPlacementActivityCommand $command)
    {
        $this->placementId = $placementId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{placementId}'), array($this->placementId), '/placements/{placementId}/activities');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddPlacementActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementActivityModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\PlacementActivityModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddPlacementActivityNotFoundException();
        }
    }
}