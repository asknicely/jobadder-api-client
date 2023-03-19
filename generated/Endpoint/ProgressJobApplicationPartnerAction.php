<?php

namespace Varspool\JobAdder\V2\Endpoint;

class ProgressJobApplicationPartnerAction extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $actionId;
    protected $applicationId;
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $applicationId Job Application Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationPartnerActionCommand $command 
     */
    public function __construct(string $actionId, int $applicationId, \Varspool\JobAdder\V2\Model\UpdateJobApplicationPartnerActionCommand $command)
    {
        $this->actionId = $actionId;
        $this->applicationId = $applicationId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{actionId}', '{applicationId}'), array($this->actionId, $this->applicationId), '/partners/actions/{actionId}/applications/{applicationId}/progress');
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
        if (204 === $status) {
            return null;
        }
    }
}