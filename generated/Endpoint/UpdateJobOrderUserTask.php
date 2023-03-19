<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateJobOrderUserTask extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $jobId;
    protected $taskId;
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateJobOrderUserTaskCommand $command 
     */
    public function __construct(int $jobId, int $taskId, \Varspool\JobAdder\V2\Model\UpdateJobOrderUserTaskCommand $command)
    {
        $this->jobId = $jobId;
        $this->taskId = $taskId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{jobId}', '{taskId}'), array($this->jobId, $this->taskId), '/jobs/{jobId}/usertasks/{taskId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobOrderUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateJobOrderUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderUserTaskModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobOrderUserTaskModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateJobOrderUserTaskNotFoundException();
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateJobOrderUserTaskUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}