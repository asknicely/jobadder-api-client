<?php

namespace Varspool\JobAdder\V2\Endpoint;

class HeadContactPhoto extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $contactId;
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param array $queryParameters {
     *     @var int $w Reduce the size of the photo to fit the width specified by w
     *     @var int $h Reduce the size of the photo to fit the height specified by g
     * }
     */
    public function __construct(int $contactId, array $queryParameters = array())
    {
        $this->contactId = $contactId;
        $this->queryParameters = $queryParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'HEAD';
    }
    public function getUri() : string
    {
        return str_replace(array('{contactId}'), array($this->contactId), '/contacts/{contactId}/photo');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('w', 'h'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('w', array('int'));
        $optionsResolver->addAllowedTypes('h', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\HeadContactPhotoNotFoundException
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
            throw new \Varspool\JobAdder\V2\Exception\HeadContactPhotoNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}