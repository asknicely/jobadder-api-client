<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindPlacements extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $placementId Placement Id
    *     @var array $type Placement Type
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $statusId Placement status
    *     @var array $candidate.candidateId Candidate Id
    *     @var string $candidate.name Candidate name
    *     @var array $candidateId Alias for candidate.candidateId
    *     @var array $company.companyId Companies by Id
    *     @var string $company.name Company name
    *     @var array $companyId Alias for company.companyId
    *     @var array $jobId Job Id
    *     @var array $applicationId Job Application Id
    *     @var array $startDate Search for placements starting in the specified date range
    ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date.
    Specify multiple parameters to search for a range.
    *     @var array $endDate Search for placements ending in the specified date range
    ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date.
    Specify multiple parameters to search for a range.
    *     @var array $folderId Search in specific folders
    *     @var array $userId User Id - search for placements by owner or associated recruiter
    *     @var array $ownerUserId User Id - search for placements by owner
    *     @var array $recruiterUserId User Id - search placements by associated recruiters
    *     @var array $createdBy User Id - search for placements created by the specified user(s)
    *     @var array $createdAt Search for placements created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for placements last updated by the specified user(s)
    *     @var array $updatedAt Search for placements updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var bool $approved Search for approved placements
    *     @var array $approvedBy User Id - search for placements approved by the specified user(s)
    *     @var array $approvedAt Search for placements approved at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $export Search for placements that have been flagged by the user for export to integration partners.
    *     @var array $timesheet.period Find placements with timesheets in the specified date range
    ([ISO full-date](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date.
    Specify multiple parameters to search for a range.
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: partnerActions
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, notes
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
        return '/placements';
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
        $optionsResolver->setDefined(array('placementId', 'type', 'partnerAction.actionId', 'partnerAction.reference', 'partnerAction.stage', 'partnerAction.submittedAt', 'statusId', 'candidate.candidateId', 'candidate.name', 'candidateId', 'company.companyId', 'company.name', 'companyId', 'jobId', 'applicationId', 'startDate', 'endDate', 'folderId', 'userId', 'ownerUserId', 'recruiterUserId', 'createdBy', 'createdAt', 'updatedBy', 'updatedAt', 'approved', 'approvedBy', 'approvedAt', 'export', 'timesheet.period', 'fields', 'embed', 'offset', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('placementId', array('array'));
        $optionsResolver->setAllowedTypes('type', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.actionId', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.reference', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.stage', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.submittedAt', array('array'));
        $optionsResolver->setAllowedTypes('statusId', array('array'));
        $optionsResolver->setAllowedTypes('candidate.candidateId', array('array'));
        $optionsResolver->setAllowedTypes('candidate.name', array('string'));
        $optionsResolver->setAllowedTypes('candidateId', array('array'));
        $optionsResolver->setAllowedTypes('company.companyId', array('array'));
        $optionsResolver->setAllowedTypes('company.name', array('string'));
        $optionsResolver->setAllowedTypes('companyId', array('array'));
        $optionsResolver->setAllowedTypes('jobId', array('array'));
        $optionsResolver->setAllowedTypes('applicationId', array('array'));
        $optionsResolver->setAllowedTypes('startDate', array('array'));
        $optionsResolver->setAllowedTypes('endDate', array('array'));
        $optionsResolver->setAllowedTypes('folderId', array('array'));
        $optionsResolver->setAllowedTypes('userId', array('array'));
        $optionsResolver->setAllowedTypes('ownerUserId', array('array'));
        $optionsResolver->setAllowedTypes('recruiterUserId', array('array'));
        $optionsResolver->setAllowedTypes('createdBy', array('array'));
        $optionsResolver->setAllowedTypes('createdAt', array('array'));
        $optionsResolver->setAllowedTypes('updatedBy', array('array'));
        $optionsResolver->setAllowedTypes('updatedAt', array('array'));
        $optionsResolver->setAllowedTypes('approved', array('bool'));
        $optionsResolver->setAllowedTypes('approvedBy', array('array'));
        $optionsResolver->setAllowedTypes('approvedAt', array('array'));
        $optionsResolver->setAllowedTypes('export', array('array'));
        $optionsResolver->setAllowedTypes('timesheet.period', array('array'));
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
     * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\PlacementListRepresentation', 'json');
        }
    }
}