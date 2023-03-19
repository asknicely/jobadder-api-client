<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindJobOrders extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
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
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
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
        $optionsResolver->setAllowedTypes('jobId', array('array'));
        $optionsResolver->setAllowedTypes('jobTitle', array('string'));
        $optionsResolver->setAllowedTypes('company.companyId', array('array'));
        $optionsResolver->setAllowedTypes('company.name', array('string'));
        $optionsResolver->setAllowedTypes('companyId', array('array'));
        $optionsResolver->setAllowedTypes('contactId', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.actionId', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.reference', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.stage', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.submittedAt', array('array'));
        $optionsResolver->setAllowedTypes('statusId', array('array'));
        $optionsResolver->setAllowedTypes('active', array('bool'));
        $optionsResolver->setAllowedTypes('userFavourite', array('bool'));
        $optionsResolver->setAllowedTypes('folderId', array('array'));
        $optionsResolver->setAllowedTypes('userId', array('array'));
        $optionsResolver->setAllowedTypes('ownerUserId', array('array'));
        $optionsResolver->setAllowedTypes('recruiterUserId', array('array'));
        $optionsResolver->setAllowedTypes('createdBy', array('array'));
        $optionsResolver->setAllowedTypes('createdAt', array('array'));
        $optionsResolver->setAllowedTypes('updatedBy', array('array'));
        $optionsResolver->setAllowedTypes('updatedAt', array('array'));
        $optionsResolver->setAllowedTypes('closedBy', array('array'));
        $optionsResolver->setAllowedTypes('closedAt', array('array'));
        $optionsResolver->setAllowedTypes('sort', array('array'));
        $optionsResolver->setAllowedTypes('fields', array('array'));
        $optionsResolver->setAllowedTypes('embed', array('array'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderListRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobOrderListRepresentation', 'json');
        }
    }
}