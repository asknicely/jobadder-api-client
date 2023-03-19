<?php

namespace Varspool\JobAdder\V2\Endpoint;

class RejectContactPartnerAction extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $actionId;
    protected $contactId;
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $contactId Contact Id
     * @param \Varspool\JobAdder\V2\Model\UpdateContactPartnerActionCommand $command 
     */
    public function __construct(string $actionId, int $contactId, \Varspool\JobAdder\V2\Model\UpdateContactPartnerActionCommand $command)
    {
        $this->actionId = $actionId;
        $this->contactId = $contactId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{actionId}', '{contactId}'), array($this->actionId, $this->contactId), '/partners/actions/{actionId}/contacts/{contactId}/reject');
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