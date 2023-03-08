<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindCandidates extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $candidateId Candidate Id
    *     @var string $name Candidate name
    *     @var string $email Candidate email
    *     @var string $phone Candidate phone or mobile number
    *     @var string $currentPosition Current Position
    *     @var string $city City
    *     @var string $state State
    *     @var string $location Location (city and/or state)
    *     @var string $keywords Search for key-words within the latest candidate resume
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $statusId Candidate status
    *     @var array $recruiterUserId User Id - search candidates by associated recruiters
    *     @var array $folderId Search in specific folders
    *     @var array $createdAt Search for candidates created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for candidates updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Default sort order is by candidateID in ascending order
    Fields available for sorting are: firstName, lastName, status.name, candidateId, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: recruiters, statistics
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, applications, placements, skills, notes
    *     @var int $offset The index of the first entry to return from the resource collection
    *     @var int $limit The maximum number of entries to return.<br />
    Setting to 0 will return only the total count of matching resources.
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/candidates';
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
        $optionsResolver->setDefined(array('candidateId', 'name', 'email', 'phone', 'currentPosition', 'city', 'state', 'location', 'keywords', 'partnerAction.actionId', 'partnerAction.reference', 'partnerAction.stage', 'partnerAction.submittedAt', 'statusId', 'recruiterUserId', 'folderId', 'createdAt', 'updatedAt', 'sort', 'fields', 'embed', 'offset', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('candidateId', array('array'));
        $optionsResolver->addAllowedTypes('name', array('string'));
        $optionsResolver->addAllowedTypes('email', array('string'));
        $optionsResolver->addAllowedTypes('phone', array('string'));
        $optionsResolver->addAllowedTypes('currentPosition', array('string'));
        $optionsResolver->addAllowedTypes('city', array('string'));
        $optionsResolver->addAllowedTypes('state', array('string'));
        $optionsResolver->addAllowedTypes('location', array('string'));
        $optionsResolver->addAllowedTypes('keywords', array('string'));
        $optionsResolver->addAllowedTypes('partnerAction.actionId', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.reference', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.stage', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.submittedAt', array('array'));
        $optionsResolver->addAllowedTypes('statusId', array('array'));
        $optionsResolver->addAllowedTypes('recruiterUserId', array('array'));
        $optionsResolver->addAllowedTypes('folderId', array('array'));
        $optionsResolver->addAllowedTypes('createdAt', array('array'));
        $optionsResolver->addAllowedTypes('updatedAt', array('array'));
        $optionsResolver->addAllowedTypes('sort', array('array'));
        $optionsResolver->addAllowedTypes('fields', array('array'));
        $optionsResolver->addAllowedTypes('embed', array('array'));
        $optionsResolver->addAllowedTypes('offset', array('int'));
        $optionsResolver->addAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Varspool\JobAdder\V2\Model\CandidateListRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CandidateListRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}