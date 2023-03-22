<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateCandidateAvailabilityWeek extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $candidateId;
    /**
     * Set the candidates availability schedule for a single week
     *
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\SetCandidateAvailabilityByWeekCommand $command 
     */
    public function __construct(int $candidateId, \Varspool\JobAdder\V2\Model\SetCandidateAvailabilityByWeekCommand $command)
    {
        $this->candidateId = $candidateId;
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}'), array($this->candidateId), '/candidates/{candidateId}/availability/weekly');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCandidateAvailabilityWeekNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCandidateAvailabilityWeekNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}