<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddCandidateJobOrders extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $candidateId;
    /**
     * 
     *
     * @param int $candidateId 
     * @param \Varspool\JobAdder\V2\Model\AddCandidateJobOrderCommand $body 
     */
    public function __construct(int $candidateId, \Varspool\JobAdder\V2\Model\AddCandidateJobOrderCommand $body)
    {
        $this->candidateId = $candidateId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}'), array($this->candidateId), '/candidates/{candidateId}/applications');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddCandidateJobOrdersConflictException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationListRepresentation', 'json');
        }
        if (409 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddCandidateJobOrdersConflictException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}