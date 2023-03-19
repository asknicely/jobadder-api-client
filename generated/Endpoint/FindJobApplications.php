<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindJobApplications extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $applicationId Application Id
    *     @var array $candidateId Candidate Id
    *     @var array $jobId Job Id
    *     @var array $adId Job Ad Id
    *     @var array $statusId Job application status
    *     @var string $jobTitle 
    *     @var bool $active Search for active job applications
    *     @var bool $rejected Search for rejected job applications
    *     @var array $review.stage Search for job applications at the specified review stage.
    *     @var array $review.userId Search for job applications submitted for review by the specified users.
    *     @var array $review.contactId Search for job applications submitted for review to the specified hiring manager contacts
    *     @var array $review.submittedAt Search for job applications submitted for review at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $review.reviewedAt Search for job applications reviewed at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var string $keywords Search for key words within the applicant's resume
    *     @var array $partnerAction.actionId Unique identifier for partner actions
    *     @var array $partnerAction.reference Partner supplied unique reference for the action
    *     @var array $partnerAction.stage Include partner actions at a specific stage
    *     @var array $partnerAction.submittedAt Search for entities submitted to an action at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $folderId Search in specific folders
    *     @var array $createdAt Search for job applications created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedBy User Id - search for job applications last updated by the specified user(s)
    *     @var array $updatedAt Search for job applications updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: createdAt, status.name, review.stage, review.submittedAt, review.reviewedAt
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: partnerActions
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self
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
        return '/applications';
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
        $optionsResolver->setDefined(array('applicationId', 'candidateId', 'jobId', 'adId', 'statusId', 'jobTitle', 'active', 'rejected', 'review.stage', 'review.userId', 'review.contactId', 'review.submittedAt', 'review.reviewedAt', 'keywords', 'partnerAction.actionId', 'partnerAction.reference', 'partnerAction.stage', 'partnerAction.submittedAt', 'folderId', 'createdAt', 'updatedBy', 'updatedAt', 'sort', 'fields', 'embed', 'offset', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('applicationId', array('array'));
        $optionsResolver->setAllowedTypes('candidateId', array('array'));
        $optionsResolver->setAllowedTypes('jobId', array('array'));
        $optionsResolver->setAllowedTypes('adId', array('array'));
        $optionsResolver->setAllowedTypes('statusId', array('array'));
        $optionsResolver->setAllowedTypes('jobTitle', array('string'));
        $optionsResolver->setAllowedTypes('active', array('bool'));
        $optionsResolver->setAllowedTypes('rejected', array('bool'));
        $optionsResolver->setAllowedTypes('review.stage', array('array'));
        $optionsResolver->setAllowedTypes('review.userId', array('array'));
        $optionsResolver->setAllowedTypes('review.contactId', array('array'));
        $optionsResolver->setAllowedTypes('review.submittedAt', array('array'));
        $optionsResolver->setAllowedTypes('review.reviewedAt', array('array'));
        $optionsResolver->setAllowedTypes('keywords', array('string'));
        $optionsResolver->setAllowedTypes('partnerAction.actionId', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.reference', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.stage', array('array'));
        $optionsResolver->setAllowedTypes('partnerAction.submittedAt', array('array'));
        $optionsResolver->setAllowedTypes('folderId', array('array'));
        $optionsResolver->setAllowedTypes('createdAt', array('array'));
        $optionsResolver->setAllowedTypes('updatedBy', array('array'));
        $optionsResolver->setAllowedTypes('updatedAt', array('array'));
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
     * @return null|\Varspool\JobAdder\V2\Model\JobApplicationListRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationListRepresentation', 'json');
        }
    }
}