<?php

namespace Varspool\JobAdder\V2\Endpoint;

class CompletePlacementPartnerAction extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $actionId;
    protected $placementId;
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $placementId Placement Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePlacementPartnerActionCommand $command 
     */
    public function __construct(string $actionId, int $placementId, \Varspool\JobAdder\V2\Model\UpdatePlacementPartnerActionCommand $command)
    {
        $this->actionId = $actionId;
        $this->placementId = $placementId;
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{actionId}', '{placementId}'), array($this->actionId, $this->placementId), '/partners/actions/{actionId}/placements/{placementId}/complete');
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
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}