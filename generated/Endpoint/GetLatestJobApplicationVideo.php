<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetLatestJobApplicationVideo extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $applicationId;
    protected $videoType;
    /**
     * 
     *
     * @param int $applicationId 
     * @param string $videoType 
     */
    public function __construct(int $applicationId, string $videoType)
    {
        $this->applicationId = $applicationId;
        $this->videoType = $videoType;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}', '{videoType}'), array($this->applicationId, $this->videoType), '/applications/{applicationId}/videos/{videoType}');
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
     * @throws \Varspool\JobAdder\V2\Exception\GetLatestJobApplicationVideoNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateVideoRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetLatestJobApplicationVideoNotFoundException();
        }
    }
}