<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddPartnerAction extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $act;
    /**
     * 
     *
     * @param string $act Action type. The type cannot be changed once assigned.
     * @param \Varspool\JobAdder\V2\Model\AddPartnerActionCommand $command 
     */
    public function __construct(string $act, \Varspool\JobAdder\V2\Model\AddPartnerActionCommand $command)
    {
        $this->act = $act;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{act}'), array($this->act), '/partners/actions/{act}');
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
     * @return null|\Varspool\JobAdder\V2\Model\PartnerActionRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionRepresentation', 'json');
        }
    }
}