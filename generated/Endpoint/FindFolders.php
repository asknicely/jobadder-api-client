<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindFolders extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $folderId Folder Id
    *     @var array $jobId Job Id
    *     @var array $candidateId Candidate Id
    *     @var array $applicationId Job Application Id
    *     @var array $placementId Placement Id
    *     @var array $companyId Company Id
    *     @var array $contactId Contact Id
    *     @var array $userId User Id - search for folders by owner or shared with the specified users
    *     @var array $ownerUserId User Id - search for folders by owner
    *     @var array $sharedWithUserId User Id - search folders shared with the specified users
    *     @var string $ownerStatus Owner status
    *     @var array $createdAt Search for folders created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $updatedAt Search for folders updated at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $fields Additional fields to include with the results.
    Fields available to include are: sharedWith
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, jobs, candidates, applications, contacts, companies, placements
    *     @var string $embedMode Determines what gets returned when embed option is one of self or candidates/contacts/etc.<br />
    Resources available to embedMode are: id
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
        return '/folders';
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
        $optionsResolver->setDefined(array('folderId', 'jobId', 'candidateId', 'applicationId', 'placementId', 'companyId', 'contactId', 'userId', 'ownerUserId', 'sharedWithUserId', 'ownerStatus', 'createdAt', 'updatedAt', 'fields', 'embed', 'embedMode', 'offset', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('folderId', array('array'));
        $optionsResolver->setAllowedTypes('jobId', array('array'));
        $optionsResolver->setAllowedTypes('candidateId', array('array'));
        $optionsResolver->setAllowedTypes('applicationId', array('array'));
        $optionsResolver->setAllowedTypes('placementId', array('array'));
        $optionsResolver->setAllowedTypes('companyId', array('array'));
        $optionsResolver->setAllowedTypes('contactId', array('array'));
        $optionsResolver->setAllowedTypes('userId', array('array'));
        $optionsResolver->setAllowedTypes('ownerUserId', array('array'));
        $optionsResolver->setAllowedTypes('sharedWithUserId', array('array'));
        $optionsResolver->setAllowedTypes('ownerStatus', array('string'));
        $optionsResolver->setAllowedTypes('createdAt', array('array'));
        $optionsResolver->setAllowedTypes('updatedAt', array('array'));
        $optionsResolver->setAllowedTypes('fields', array('array'));
        $optionsResolver->setAllowedTypes('embed', array('array'));
        $optionsResolver->setAllowedTypes('embedMode', array('string'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Varspool\JobAdder\V2\Model\FolderListRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\FolderListRepresentation', 'json');
        }
    }
}