<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateCompanyUserTask extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;
    protected $taskId;
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param int $taskId Task Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyUserTaskCommand $command 
     */
    public function __construct(int $companyId, int $taskId, \Varspool\JobAdder\V2\Model\UpdateCompanyUserTaskCommand $command)
    {
        $this->companyId = $companyId;
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
        return str_replace(array('{companyId}', '{taskId}'), array($this->companyId, $this->taskId), '/companies/{companyId}/usertasks/{taskId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyUserTaskNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyUserTaskUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyUserTaskModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CompanyUserTaskModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCompanyUserTaskNotFoundException();
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCompanyUserTaskUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}