<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddCompanyWorkflow extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;
    protected $workflowType;
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $workflowType Valid values: "Requisition"
     * @param \Varspool\JobAdder\V2\Model\AddCompanyWorkflowCommand $body 
     */
    public function __construct(int $companyId, string $workflowType, \Varspool\JobAdder\V2\Model\AddCompanyWorkflowCommand $body)
    {
        $this->companyId = $companyId;
        $this->workflowType = $workflowType;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}', '{workflowType}'), array($this->companyId, $this->workflowType), '/companies/{companyId}/workflows/{workflowType}');
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
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CompanyWorkflowRepresentation', 'json');
        }
    }
}