<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PutCandidateStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $candidateId;
    /**
     * Change the candidate status and add an optional note
     *
     * @param int $candidateId 
     * @param \Varspool\JobAdder\V2\Model\SetCandidateStatusCommand $body 
     */
    public function __construct(int $candidateId, \Varspool\JobAdder\V2\Model\SetCandidateStatusCommand $body)
    {
        $this->candidateId = $candidateId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}'), array($this->candidateId), '/candidates/{candidateId}/status');
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
     * @throws \Varspool\JobAdder\V2\Exception\PutCandidateStatusNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PutCandidateStatusUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (202 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutCandidateStatusNotFoundException();
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutCandidateStatusUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}