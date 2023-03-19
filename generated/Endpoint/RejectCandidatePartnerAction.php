<?php

namespace Varspool\JobAdder\V2\Endpoint;

class RejectCandidatePartnerAction extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $actionId;
    protected $candidateId;
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $candidateId Candidate Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCandidatePartnerActionCommand $command 
     */
    public function __construct(string $actionId, int $candidateId, \Varspool\JobAdder\V2\Model\UpdateCandidatePartnerActionCommand $command)
    {
        $this->actionId = $actionId;
        $this->candidateId = $candidateId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{actionId}', '{candidateId}'), array($this->actionId, $this->candidateId), '/partners/actions/{actionId}/candidates/{candidateId}/reject');
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