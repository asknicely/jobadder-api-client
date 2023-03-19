<?php

namespace Varspool\JobAdder\V2\Endpoint;

class AttachJobBoardJobApplicationDocument extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $boardId;
    protected $adId;
    protected $applicationId;
    protected $attachmentType;
    /**
    * Add a resume, cover letter or related document to a previously submitted job application.<br />
    Documents can be added for a duration of 5 minutes after submitting the job application.
    *
    * @param int $boardId Job Board Id
    * @param int $adId Job Ad Id
    * @param int $applicationId Job Application Id
    * @param string $attachmentType 
    * @param array $formParameters {
    *     @var string|resource|\Psr\Http\Message\StreamInterface $fileData 
    * }
    */
    public function __construct(int $boardId, int $adId, int $applicationId, string $attachmentType, array $formParameters = array())
    {
        $this->boardId = $boardId;
        $this->adId = $adId;
        $this->applicationId = $applicationId;
        $this->attachmentType = $attachmentType;
        $this->formParameters = $formParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{boardId}', '{adId}', '{applicationId}', '{attachmentType}'), array($this->boardId, $this->adId, $this->applicationId, $this->attachmentType), '/jobboards/{boardId}/ads/{adId}/applications/{applicationId}/{attachmentType}');
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
        $optionsResolver->setAllowedTypes('fileData', array('string', 'resource', '\\Psr\\Http\\Message\\StreamInterface'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\AttachJobBoardJobApplicationDocumentUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (202 === $status) {
            return null;
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\AttachJobBoardJobApplicationDocumentUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}