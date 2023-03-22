<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddJobOrderActivity extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $jobId;
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param \Varspool\JobAdder\V2\Model\AddJobOrderActivityCommand $command 
     */
    public function __construct(int $jobId, \Varspool\JobAdder\V2\Model\AddJobOrderActivityCommand $command)
    {
        $this->jobId = $jobId;
        $this->body = $command;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{jobId}'), array($this->jobId), '/jobs/{jobId}/activities');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddJobOrderActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderActivityModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobOrderActivityModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddJobOrderActivityNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}