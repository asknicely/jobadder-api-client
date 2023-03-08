<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateJobOrderAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $jobId;
    protected $attach;
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobOrderAttachmentCommand $command 
     */
    public function __construct(int $jobId, int $attach, \Varspool\JobAdder\V2\Model\UpdateJobOrderAttachmentCommand $command)
    {
        $this->jobId = $jobId;
        $this->attach = $attach;
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{jobId}', '{attach}'), array($this->jobId, $this->attach), '/jobs/{jobId}/attachments/{attach}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobOrderAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateJobOrderAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}