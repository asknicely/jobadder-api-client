<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetCandidateAttachment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $candidateId;
    protected $attach;
    /**
     * Get a candidate attachment.<br />Setting the Accept header will attempt a file conversion.
     *
     * @param int $candidateId Candidate Id
     * @param int $attach Attachment Id
     */
    public function __construct(int $candidateId, int $attach)
    {
        $this->candidateId = $candidateId;
        $this->attach = $attach;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}', '{attach}'), array($this->candidateId, $this->attach), '/candidates/{candidateId}/attachments/{attach}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetCandidateAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetCandidateAttachmentNotFoundException();
        }
    }
}