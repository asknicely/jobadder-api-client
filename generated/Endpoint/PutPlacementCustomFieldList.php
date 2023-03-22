<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PutPlacementCustomFieldList extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $fieldId;
    /**
     * 
     *
     * @param int $fieldId 
     * @param \Varspool\JobAdder\V2\Model\SetPlacementCustomFieldListValuesCommand $command 
     */
    public function __construct(int $fieldId, \Varspool\JobAdder\V2\Model\SetPlacementCustomFieldListValuesCommand $command)
    {
        $this->fieldId = $fieldId;
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{fieldId}'), array($this->fieldId), '/placements/fields/custom/custom/{fieldId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\PutPlacementCustomFieldListNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutPlacementCustomFieldListNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}