<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateJobAdDraft extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $adId;
    /**
     * 
     *
     * @param int $adId 
     * @param \Varspool\JobAdder\V2\Model\UpdateJobAdDraftCommand $body 
     */
    public function __construct(int $adId, \Varspool\JobAdder\V2\Model\UpdateJobAdDraftCommand $body)
    {
        $this->adId = $adId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{adId}'), array($this->adId), '/jobads/{adId}');
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
        if (200 === $status) {
            return null;
        }
        if (204 === $status) {
            return null;
        }
    }
}