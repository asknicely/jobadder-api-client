<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetPlacementAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $placementId;
    protected $attach;
    /**
     * Get a placement attachment.<br />Setting the Accept header will attempt a file conversion.
     *
     * @param int $placementId Placement Id
     * @param int $attach Attachment Id
     */
    public function __construct(int $placementId, int $attach)
    {
        $this->placementId = $placementId;
        $this->attach = $attach;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{placementId}', '{attach}'), array($this->placementId, $this->attach), '/placements/{placementId}/attachments/{attach}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetPlacementAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetPlacementAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}