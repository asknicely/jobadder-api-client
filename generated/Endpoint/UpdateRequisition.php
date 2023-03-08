<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateRequisition extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $requisitionId;
    /**
     * 
     *
     * @param int $requisitionId Requisition Id
     * @param \Varspool\JobAdder\V2\Model\UpdateRequisitionCommand $body 
     */
    public function __construct(int $requisitionId, \Varspool\JobAdder\V2\Model\UpdateRequisitionCommand $body)
    {
        $this->requisitionId = $requisitionId;
        $this->body = $body;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{requisitionId}'), array($this->requisitionId), '/requisitions/{requisitionId}');
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