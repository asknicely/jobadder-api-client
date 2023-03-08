<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindPlacements extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
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
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
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
        $optionsResolver->addAllowedTypes('placementId', array('array'));
        $optionsResolver->addAllowedTypes('type', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.actionId', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.reference', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.stage', array('array'));
        $optionsResolver->addAllowedTypes('partnerAction.submittedAt', array('array'));
        $optionsResolver->addAllowedTypes('statusId', array('array'));
        $optionsResolver->addAllowedTypes('candidate.candidateId', array('array'));
        $optionsResolver->addAllowedTypes('candidate.name', array('string'));
        $optionsResolver->addAllowedTypes('candidateId', array('array'));
        $optionsResolver->addAllowedTypes('company.companyId', array('array'));
        $optionsResolver->addAllowedTypes('company.name', array('string'));
        $optionsResolver->addAllowedTypes('companyId', array('array'));
        $optionsResolver->addAllowedTypes('jobId', array('array'));
        $optionsResolver->addAllowedTypes('applicationId', array('array'));
        $optionsResolver->addAllowedTypes('startDate', array('array'));
        $optionsResolver->addAllowedTypes('endDate', array('array'));
        $optionsResolver->addAllowedTypes('folderId', array('array'));
        $optionsResolver->addAllowedTypes('userId', array('array'));
        $optionsResolver->addAllowedTypes('ownerUserId', array('array'));
        $optionsResolver->addAllowedTypes('recruiterUserId', array('array'));
        $optionsResolver->addAllowedTypes('createdBy', array('array'));
        $optionsResolver->addAllowedTypes('createdAt', array('array'));
        $optionsResolver->addAllowedTypes('updatedBy', array('array'));
        $optionsResolver->addAllowedTypes('updatedAt', array('array'));
        $optionsResolver->addAllowedTypes('approved', array('bool'));
        $optionsResolver->addAllowedTypes('approvedBy', array('array'));
        $optionsResolver->addAllowedTypes('approvedAt', array('array'));
        $optionsResolver->addAllowedTypes('export', array('array'));
        $optionsResolver->addAllowedTypes('timesheet.period', array('array'));
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
     * @return null|\Varspool\JobAdder\V2\Model\PlacementListRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\PlacementListRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}