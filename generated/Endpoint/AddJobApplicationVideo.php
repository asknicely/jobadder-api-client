<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddJobApplicationVideo extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $applicationId;
    protected $videoType;
    /**
     * 
     *
     * @param int $applicationId Job Application Id
     * @param string $videoType 
     * @param \Varspool\JobAdder\V2\Model\AddJobApplicationVideoCommand $command 
     */
    public function __construct(int $applicationId, string $videoType, \Varspool\JobAdder\V2\Model\AddJobApplicationVideoCommand $command)
    {
        $this->applicationId = $applicationId;
        $this->videoType = $videoType;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}', '{videoType}'), array($this->applicationId, $this->videoType), '/applications/{applicationId}/videos/{videoType}');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddJobApplicationVideoNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateVideoModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateVideoModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddJobApplicationVideoNotFoundException();
        }
    }
}