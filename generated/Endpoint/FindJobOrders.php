<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindJobOrders extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $jobId Job Id
    *     @var string $jobTitle Job title
    *     @var array $company.companyId Companies by Id
    *     @var string $company.name Company name
    *     @var array $companyId Alias for company.companyId
    *     @var array $contactId Contact Id
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $statusId Job status
    *     @var bool $active Search for active/open jobs
    *     @var bool $userFavourite Search for the user's favourite jobs
    *     @var array $folderId Search in specific folders
    *     @var array $userId User Id - search for jobs by owner or associated recruiter
    *     @var array $ownerUserId User Id - search for jobs by owner
    *     @var array $recruiterUserId User Id - search jobs by associated recruiters
    *     @var array $createdBy User Id - search for jobs created by the specified user(s)
    *     @var array $createdAt Search for jobs created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for jobs last updated by the specified user(s)
    *     @var array $updatedAt Search for jobs updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $closedBy User Id - search for jobs last closed by the specified user(s)
    *     @var array $closedAt Search for jobs closed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: jobTitle, status.name, createdAt, updatedAt, closedAt
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: recruiters, statistics, partnerActions
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, notes, applications
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
        return '/jobs';
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
        $optionsResolver->setDefined(array('jobId', 'jobTitle', 'company.companyId', 'company.name', 'companyId', 'contactId', 'partnerAction.actionId', 'partnerAction.reference', 'partnerAction.stage', 'partnerAction.submittedAt', 'statusId', 'active', 'userFavourite', 'folderId', 'userId', 'ownerUserId', 'recruiterUserId', 'createdBy', 'createdAt', 'updatedBy', 'updatedAt', 'closedBy', 'closedAt', 'sort', 'fields', 'embed', 'offset', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('jobId', array('array'));
        $optionsResolver->addAllowedTypes('jobTitle', array('string'));
        $optionsResolver->addAllowedTypes('company.companyId', array('array'));
        $optionsResolver->addAllowedTypes('company.name', array('string'));
        $optionsResolver->addAllowedTypes('companyId', array('array'));
        $optionsResolver->addAllowedTypes('contactId', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.actionId', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.reference', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.stage', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.submittedAt', array('array'));
        $optionsResolver->addAllowedTypes('statusId', array('array'));
        $optionsResolver->addAllowedTypes('active', array('bool'));
        $optionsResolver->addAllowedTypes('userFavourite', array('bool'));
        $optionsResolver->addAllowedTypes('folderId', array('array'));
        $optionsResolver->addAllowedTypes('userId', array('array'));
        $optionsResolver->addAllowedTypes('ownerUserId', array('array'));
        $optionsResolver->addAllowedTypes('recruiterUserId', array('array'));
        $optionsResolver->addAllowedTypes('createdBy', array('array'));
        $optionsResolver->addAllowedTypes('createdAt', array('array'));
        $optionsResolver->addAllowedTypes('updatedBy', array('array'));
        $optionsResolver->addAllowedTypes('updatedAt', array('array'));
        $optionsResolver->addAllowedTypes('closedBy', array('array'));
        $optionsResolver->addAllowedTypes('closedAt', array('array'));
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
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderListRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobOrderListRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}