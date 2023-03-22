<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindPlacementAttachments extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $placementId;
    /**
    * 
    *
    * @param int $placementId 
    * @param array $queryParameters {
    *     @var array $type Attachment types to include
    *     @var bool $latest Find the latest version of each attachment type
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    */
    public function __construct(int $placementId, array $queryParameters = array())
    {
        $this->placementId = $placementId;
        $this->queryParameters = $queryParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{placementId}'), array($this->placementId), '/placements/{placementId}/attachments');
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
        $optionsResolver->setDefined(array('type', 'latest', 'offset', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('type', array('array'));
        $optionsResolver->addAllowedTypes('latest', array('bool'));
        $optionsResolver->addAllowedTypes('offset', array('int'));
        $optionsResolver->addAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Varspool\JobAdder\V2\Model\PlacementAttachmentListRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\PlacementAttachmentListRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}