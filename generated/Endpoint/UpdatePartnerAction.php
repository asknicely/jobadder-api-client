<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdatePartnerAction extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $act;
    /**
     * 
     *
     * @param string $act Action Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePartnerActionCommand $command 
     */
    public function __construct(string $act, \Varspool\JobAdder\V2\Model\UpdatePartnerActionCommand $command)
    {
        $this->act = $act;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePartnerActionNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\PartnerActionRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdatePartnerActionNotFoundException();
        }
    }
}