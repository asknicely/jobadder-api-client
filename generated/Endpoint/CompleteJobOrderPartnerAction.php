<?php

namespace Varspool\JobAdder\V2\Endpoint;

class CompleteJobOrderPartnerAction extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $actionId;
    protected $jobId;
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $jobId Job Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobOrderPartnerActionCommand $command 
     */
    public function __construct(string $actionId, int $jobId, \Varspool\JobAdder\V2\Model\UpdateJobOrderPartnerActionCommand $command)
    {
        $this->actionId = $actionId;
        $this->jobId = $jobId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{actionId}', '{jobId}'), array($this->actionId, $this->jobId), '/partners/actions/{actionId}/jobs/{jobId}/complete');
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