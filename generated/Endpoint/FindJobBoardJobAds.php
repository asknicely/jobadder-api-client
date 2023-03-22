<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindJobBoardJobAds extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $boardId;
    /**
    * 
    *
    * @param int $boardId 
    * @param array $queryParameters {
    *     @var array $adId 
    *     @var array $reference 
    *     @var bool $portal.hotJob 
    *     @var array $portal.value 
    *     @var array $portal.valueId 
    *     @var array $portal.template 
    *     @var array $postedAt Search for job ads posted at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for job ads updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $expiresAt Search for job ads expiring at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: <code>description</code>, <code>portal.fields</code>
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    */
    public function __construct(int $boardId, array $queryParameters = array())
    {
        $this->boardId = $boardId;
        $this->queryParameters = $queryParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{boardId}'), array($this->boardId), '/jobboards/{boardId}/ads');
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
        $optionsResolver->setDefined(array('adId', 'reference', 'portal.hotJob', 'portal.value', 'portal.valueId', 'portal.template', 'postedAt', 'updatedAt', 'expiresAt', 'fields', 'offset', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('adId', array('array'));
        $optionsResolver->addAllowedTypes('reference', array('array'));
        $optionsResolver->addAllowedTypes('portal.hotJob', array('bool'));
        $optionsResolver->addAllowedTypes('portal.value', array('array'));
        $optionsResolver->addAllowedTypes('portal.valueId', array('array'));
        $optionsResolver->addAllowedTypes('portal.template', array('array'));
        $optionsResolver->addAllowedTypes('postedAt', array('array'));
        $optionsResolver->addAllowedTypes('updatedAt', array('array'));
        $optionsResolver->addAllowedTypes('expiresAt', array('array'));
        $optionsResolver->addAllowedTypes('fields', array('array'));
        $optionsResolver->addAllowedTypes('offset', array('int'));
        $optionsResolver->addAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobBoardJobAdListRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobBoardJobAdListRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}