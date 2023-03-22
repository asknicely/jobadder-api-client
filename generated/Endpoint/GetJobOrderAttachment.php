<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetJobOrderAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $jobId;
    protected $attach;
    /**
     * Get a job attachment.<br />Setting the Accept header will attempt a file conversion.
     *
     * @param int $jobId Job Id
     * @param int $attach Attachment Id
     */
    public function __construct(int $jobId, int $attach)
    {
        $this->jobId = $jobId;
        $this->attach = $attach;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{jobId}', '{attach}'), array($this->jobId, $this->attach), '/jobs/{jobId}/attachments/{attach}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderAttachmentNotFoundException
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
            throw new \Varspool\JobAdder\V2\Exception\GetJobOrderAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}