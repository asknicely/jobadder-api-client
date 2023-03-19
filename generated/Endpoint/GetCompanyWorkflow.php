<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetCompanyWorkflow extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
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
     */
    public function __construct(int $companyId, string $workflowType, int $workflowId)
    {
        $this->companyId = $companyId;
        $this->workflowType = $workflowType;
        $this->workflowId = $workflowId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}', '{workflowType}', '{workflowId}'), array($this->companyId, $this->workflowType, $this->workflowId), '/companies/{companyId}/workflows/{workflowType}/{workflowId}');
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