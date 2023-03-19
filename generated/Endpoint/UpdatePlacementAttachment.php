<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdatePlacementAttachment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $placementId;
    protected $attach;
    /**
     * 
     *
     * @param int $placementId Placement Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdatePlacementAttachmentCommand $command 
     */
    public function __construct(int $placementId, int $attach, \Varspool\JobAdder\V2\Model\UpdatePlacementAttachmentCommand $command)
    {
        $this->placementId = $placementId;
        $this->attach = $attach;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{placementId}', '{attach}'), array($this->placementId, $this->attach), '/placements/{placementId}/attachments/{attach}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdatePlacementAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdatePlacementAttachmentNotFoundException();
        }
    }
}