<?php

namespace Varspool\JobAdder\V2\Endpoint;

class SubmitJobOrderCandidate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $jobId;
    /**
     * 
     *
     * @param int $jobId 
     * @param \Varspool\JobAdder\V2\Model\SubmitJobOrderCandidateCommand $command 
     */
    public function __construct(int $jobId, \Varspool\JobAdder\V2\Model\SubmitJobOrderCandidateCommand $command)
    {
        $this->jobId = $jobId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{jobId}'), array($this->jobId), '/jobs/{jobId}/applications/submit');
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
     * @throws \Varspool\JobAdder\V2\Exception\SubmitJobOrderCandidateUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationRepresentation', 'json');
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\SubmitJobOrderCandidateUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}