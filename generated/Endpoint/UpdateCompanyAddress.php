<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateCompanyAddress extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $companyId;
    protected $addressId;
    /**
     * 
     *
     * @param int $companyId 
     * @param string $addressId 
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyAddressCommand $body 
     */
    public function __construct(int $companyId, string $addressId, \Varspool\JobAdder\V2\Model\UpdateCompanyAddressCommand $body)
    {
        $this->companyId = $companyId;
        $this->addressId = $addressId;
        $this->body = $body;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}', '{addressId}'), array($this->companyId, $this->addressId), '/companies/{companyId}/addresses/{addressId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyAddressNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCompanyAddressNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}