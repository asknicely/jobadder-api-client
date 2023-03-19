<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateWebhook extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $webhookId;
    /**
     * 
     *
     * @param string $webhookId 
     * @param \Varspool\JobAdder\V2\Model\UpdateWebhookCommand $body 
     */
    public function __construct(string $webhookId, \Varspool\JobAdder\V2\Model\UpdateWebhookCommand $body)
    {
        $this->webhookId = $webhookId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{webhookId}'), array($this->webhookId), '/webhooks/{webhookId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateWebhookNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateWebhookUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateWebhookNotFoundException();
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateWebhookUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}