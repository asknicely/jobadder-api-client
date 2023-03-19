<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindRequisitions extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $requisitionId Requisition Id
    *     @var array $companyId Company Id
    *     @var array $status 
    *     @var array $hiringManager.contactId 
    *     @var string $hiringManager.name 
    *     @var array $approver.contactId Find requisitions by approver contact id
    *     @var string $approver.name 
    *     @var bool $approver.pending Find requisitions pending approval by contacts specified in approver.contactId
    *     @var array $userId User Id - search for requisitions by owner or associated recruiter
    *     @var array $ownerUserId User Id - search for requisitions by owner
    *     @var array $recruiterUserId User Id - search for requisitions by associated recruiters
    *     @var array $createdAt Search for jobs created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for jobs updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $sort Sort the results by one or multiple fields, prefix with "-" to sort descending.<br />
    Fields available for sorting are: jobTitle, status, createdAt, updatedAt
    *     @var array $fields Additional fields to include with the results.<br />
    Fields available to include are: workflow
    *     @var array $embed Linked resources to embed in the results<br />
    Resources available are: self, notes
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
        return '/requisitions';
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
        $optionsResolver->setDefined(array('requisitionId', 'companyId', 'status', 'hiringManager.contactId', 'hiringManager.name', 'approver.contactId', 'approver.name', 'approver.pending', 'userId', 'ownerUserId', 'recruiterUserId', 'createdAt', 'updatedAt', 'sort', 'fields', 'embed', 'offset', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('requisitionId', array('array'));
        $optionsResolver->setAllowedTypes('companyId', array('array'));
        $optionsResolver->setAllowedTypes('status', array('array'));
        $optionsResolver->setAllowedTypes('hiringManager.contactId', array('array'));
        $optionsResolver->setAllowedTypes('hiringManager.name', array('string'));
        $optionsResolver->setAllowedTypes('approver.contactId', array('array'));
        $optionsResolver->setAllowedTypes('approver.name', array('string'));
        $optionsResolver->setAllowedTypes('approver.pending', array('bool'));
        $optionsResolver->setAllowedTypes('userId', array('array'));
        $optionsResolver->setAllowedTypes('ownerUserId', array('array'));
        $optionsResolver->setAllowedTypes('recruiterUserId', array('array'));
        $optionsResolver->setAllowedTypes('createdAt', array('array'));
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
     * @return null|\Varspool\JobAdder\V2\Model\RequisitionListRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\RequisitionListRepresentation', 'json');
        }
    }
}