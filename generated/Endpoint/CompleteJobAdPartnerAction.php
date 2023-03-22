<?php

namespace Varspool\JobAdder\V2\Endpoint;

class CompleteJobAdPartnerAction extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $actionId;
    protected $adId;
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $adId Job Ad Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobAdPartnerActionCommand $command 
     */
    public function __construct(string $actionId, int $adId, \Varspool\JobAdder\V2\Model\UpdateJobAdPartnerActionCommand $command)
    {
        $this->actionId = $actionId;
        $this->adId = $adId;
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{actionId}', '{adId}'), array($this->actionId, $this->adId), '/partners/actions/{actionId}/jobads/{adId}/complete');
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