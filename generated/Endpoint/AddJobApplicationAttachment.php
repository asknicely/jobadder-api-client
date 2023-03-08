<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddJobApplicationAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $applicationId;
    protected $attach;
    /**
     * 
     *
     * @param int $applicationId Job Application Id
     * @param string $attach 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     */
    public function __construct(int $applicationId, string $attach, array $formParameters = array())
    {
        $this->applicationId = $applicationId;
        $this->attach = $attach;
        $this->formParameters = $formParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{applicationId}', '{attach}'), array($this->applicationId, $this->attach), '/applications/{applicationId}/attachments/{attach}');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddJobApplicationAttachmentNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateAttachmentRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateAttachmentRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddJobApplicationAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}