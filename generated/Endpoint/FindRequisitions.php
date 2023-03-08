<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindRequisitions extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
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
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
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
        $optionsResolver->addAllowedTypes('requisitionId', array('array'));
        $optionsResolver->addAllowedTypes('companyId', array('array'));
        $optionsResolver->addAllowedTypes('status', array('array'));
        $optionsResolver->addAllowedTypes('hiringManager.contactId', array('array'));
        $optionsResolver->addAllowedTypes('hiringManager.name', array('string'));
        $optionsResolver->addAllowedTypes('approver.contactId', array('array'));
        $optionsResolver->addAllowedTypes('approver.name', array('string'));
        $optionsResolver->addAllowedTypes('approver.pending', array('bool'));
        $optionsResolver->addAllowedTypes('userId', array('array'));
        $optionsResolver->addAllowedTypes('ownerUserId', array('array'));
        $optionsResolver->addAllowedTypes('recruiterUserId', array('array'));
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
     * @return null|\Varspool\JobAdder\V2\Model\RequisitionListRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\RequisitionListRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}