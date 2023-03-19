<?php

namespace Varspool\JobAdder\V2\Endpoint;

class ProgressCompanyPartnerAction extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $actionId;
    protected $companyId;
    /**
     * 
     *
     * @param string $actionId Action Id
     * @param int $companyId Company Id
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyPartnerActionCommand $command 
     */
    public function __construct(string $actionId, int $companyId, \Varspool\JobAdder\V2\Model\UpdateCompanyPartnerActionCommand $command)
    {
        $this->actionId = $actionId;
        $this->companyId = $companyId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{actionId}', '{companyId}'), array($this->actionId, $this->companyId), '/partners/actions/{actionId}/companies/{companyId}/progress');
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
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
    }
}