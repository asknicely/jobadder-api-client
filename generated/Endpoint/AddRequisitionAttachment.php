<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddRequisitionAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $requisitionId;
    protected $attachmentType;
    /**
     * 
     *
     * @param int $requisitionId Requisition Id
     * @param string $attachmentType 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     */
    public function __construct(int $requisitionId, string $attachmentType, array $formParameters = array())
    {
        $this->requisitionId = $requisitionId;
        $this->attachmentType = $attachmentType;
        $this->formParameters = $formParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{requisitionId}', '{attachmentType}'), array($this->requisitionId, $this->attachmentType), '/requisitions/{requisitionId}/attachments/{attachmentType}');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddRequisitionAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AddRequisitionAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}