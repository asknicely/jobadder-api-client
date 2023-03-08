<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddCompanyWorkflow extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
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
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CompanyWorkflowRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}