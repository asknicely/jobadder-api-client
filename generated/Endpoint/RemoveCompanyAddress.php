<?php

namespace Varspool\JobAdder\V2\Endpoint;

class RemoveCompanyAddress extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;
    protected $addressId;
    /**
     * 
     *
     * @param int $companyId 
     * @param string $addressId 
     */
    public function __construct(int $companyId, string $addressId)
    {
        $this->companyId = $companyId;
        $this->addressId = $addressId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}', '{addressId}'), array($this->companyId, $this->addressId), '/companies/{companyId}/addresses/{addressId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\RemoveCompanyAddressNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\RemoveCompanyAddressNotFoundException();
        }
    }
}