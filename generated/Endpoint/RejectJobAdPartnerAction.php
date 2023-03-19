<?php

namespace Varspool\JobAdder\V2\Endpoint;

class RejectJobAdPartnerAction extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
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
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{actionId}', '{adId}'), array($this->actionId, $this->adId), '/partners/actions/{actionId}/jobads/{adId}/reject');
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
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
    }
}