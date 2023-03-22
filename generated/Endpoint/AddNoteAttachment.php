<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AddNoteAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $noteId;
    /**
     * The file can be submitted either as multipart/form-data with a single part containing only the file, or as binary data
     *
     * @param string $noteId 
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
     * }
     */
    public function __construct(string $noteId, array $formParameters = array())
    {
        $this->noteId = $noteId;
        $this->formParameters = $formParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{noteId}'), array($this->noteId), '/notes/{noteId}/attachments');
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
     * @throws \Varspool\JobAdder\V2\Exception\AddNoteAttachmentNotFoundException
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
            throw new \Varspool\JobAdder\V2\Exception\AddNoteAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}