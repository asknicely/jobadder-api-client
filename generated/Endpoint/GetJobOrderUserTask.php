<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetJobOrderUserTask extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $jobId;
    protected $taskId;
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $taskId Task Id
     */
    public function __construct(int $jobId, int $taskId)
    {
        $this->jobId = $jobId;
        $this->taskId = $taskId;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{jobId}', '{taskId}'), array($this->jobId, $this->taskId), '/jobs/{jobId}/usertasks/{taskId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderUserTaskNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderUserTaskRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobOrderUserTaskRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetJobOrderUserTaskNotFoundException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}