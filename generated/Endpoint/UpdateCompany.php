<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateCompany extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $companyId;
    /**
     * 
     *
     * @param int $companyId 
     * @param \Varspool\JobAdder\V2\Model\UpdateCompanyCommand $body 
     * @param array $headerParameters {
     *     @var string $X-Allow-Duplicates Duplicate override code from the header of an earlier 409 response
     * }
     */
    public function __construct(int $companyId, \Varspool\JobAdder\V2\Model\UpdateCompanyCommand $body, array $headerParameters = array())
    {
        $this->companyId = $companyId;
        $this->body = $body;
        $this->headerParameters = $headerParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}'), array($this->companyId), '/companies/{companyId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Allow-Duplicates'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('X-Allow-Duplicates', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyConflictException
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCompanyNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCompanyConflictException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\UpdateCompanyUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}