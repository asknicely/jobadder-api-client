<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PutJobOrderCustomFieldList extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $fieldId;
    /**
     * 
     *
     * @param int $fieldId 
     * @param \Varspool\JobAdder\V2\Model\SetJobOrderCustomFieldListValuesCommand $command 
     */
    public function __construct(int $fieldId, \Varspool\JobAdder\V2\Model\SetJobOrderCustomFieldListValuesCommand $command)
    {
        $this->fieldId = $fieldId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{fieldId}'), array($this->fieldId), '/jobs/fields/custom/custom/{fieldId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\PutJobOrderCustomFieldListNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CustomFieldRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutJobOrderCustomFieldListNotFoundException();
        }
    }
}