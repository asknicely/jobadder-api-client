<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateCompanyWorkflow extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;
    protected $workflowType;
    protected $workflowId;
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $workflowType Valid values: "Requisition"
     * @param int $workflowId Workflow Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyWorkflowCommand $body 
     */
    public function __construct(int $companyId, string $workflowType, int $workflowId, \Varspool\JobAdder\V2\Model\UpdateCompanyWorkflowCommand $body)
    {
        $this->companyId = $companyId;
        $this->workflowType = $workflowType;
        $this->workflowId = $workflowId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}', '{workflowType}', '{workflowId}'), array($this->companyId, $this->workflowType, $this->workflowId), '/companies/{companyId}/workflows/{workflowType}/{workflowId}');
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
     * @return null|\Varspool\JobAdder\V2\Model\CompanyWorkflowRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CompanyWorkflowRepresentation', 'json');
        }
    }
}