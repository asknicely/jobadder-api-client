<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddCompanyActivity extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param \Varspool\JobAdder\V2\Model\AddCompanyActivityCommand $command 
     */
    public function __construct(int $companyId, \Varspool\JobAdder\V2\Model\AddCompanyActivityCommand $command)
    {
        $this->companyId = $companyId;
        $this->body = $command;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}'), array($this->companyId), '/companies/{companyId}/activities');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddCompanyActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyActivityModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CompanyActivityModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddCompanyActivityNotFoundException();
        }
    }
}