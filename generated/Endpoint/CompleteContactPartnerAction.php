<?php

namespace Varspool\JobAdder\V2\Endpoint;

class CompleteContactPartnerAction extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
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
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{actionId}', '{contactId}'), array($this->actionId, $this->contactId), '/partners/actions/{actionId}/contacts/{contactId}/complete');
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