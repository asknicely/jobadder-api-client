<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetCompanyAddress extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $companyId;
    protected $addressId;
    /**
     * 
     *
     * @param int $companyId Company Id
     * @param string $addressId Address Id
     */
    public function __construct(int $companyId, string $addressId)
    {
        $this->companyId = $companyId;
        $this->addressId = $addressId;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
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
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyAddressNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CompanyAddressRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetCompanyAddressNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}