<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateCandidateAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $candidateId;
    protected $attach;
    /**
     * 
     *
     * @param int $candidateId Candidate Id
     * @param int $attach Attachment Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidateAttachmentCommand $command 
     */
    public function __construct(int $candidateId, int $attach, \Varspool\JobAdder\V2\Model\UpdateCandidateAttachmentCommand $command)
    {
        $this->candidateId = $candidateId;
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
        return str_replace(array('{candidateId}', '{attach}'), array($this->candidateId, $this->attach), '/candidates/{candidateId}/attachments/{attach}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateAttachmentNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateAttachmentRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateAttachmentRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCandidateAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}