<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateJobApplicationAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $applicationId;
    protected $attach;
    /**
     * 
     *
     * @param int $applicationId Job Application Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobApplicationAttachmentCommand $command 
     */
    public function __construct(int $applicationId, int $attach, \Varspool\JobAdder\V2\Model\UpdateJobApplicationAttachmentCommand $command)
    {
        $this->applicationId = $applicationId;
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
        return str_replace(array('{applicationId}', '{attach}'), array($this->applicationId, $this->attach), '/applications/{applicationId}/attachments/{attach}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobApplicationAttachmentNotFoundException
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
            throw new \Varspool\JobAdder\V2\Exception\UpdateJobApplicationAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}