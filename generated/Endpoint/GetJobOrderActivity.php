<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetJobOrderActivity extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $jobId;
    protected $activityId;
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $activityId Activity Id
     */
    public function __construct(int $jobId, int $activityId)
    {
        $this->jobId = $jobId;
        $this->activityId = $activityId;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{jobId}', '{activityId}'), array($this->jobId, $this->activityId), '/jobs/{jobId}/activities/{activityId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderActivityRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobOrderActivityRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetJobOrderActivityNotFoundException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}