<?php

namespace Varspool\JobAdder\V2\Endpoint;

class UpdateCompanyLogo extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $companyId;
    /**
     * 
     *
     * @param int $companyId 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     */
    public function __construct(int $companyId, array $formParameters = array())
    {
        $this->companyId = $companyId;
        $this->formParameters = $formParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}'), array($this->companyId), '/companies/{companyId}/logo');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getMultipartBody($streamFactory);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getFormOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(array('fileData'));
        $optionsResolver->setRequired(array('fileData'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('fileData', array('string', 'resource', '\\Psr\\Http\\Message\\StreamInterface'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\UpdateCompanyLogoNotFoundException
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
            throw new \Varspool\JobAdder\V2\Exception\UpdateCompanyLogoNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}