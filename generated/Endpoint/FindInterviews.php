<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindInterviews extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var array $interviewId 
    *     @var array $jobId 
    *     @var array $userId User Id - search for internal/user interviewers
    *     @var array $contactId Contact Id - search for external/contact interviewers
    *     @var array $candidateId Candidate Id - search for interviewees by candidateId
    *     @var array $applicationId Application Id - search for interviewees by applicationId
    *     @var array $type 
    *     @var array $startAt Search for interviews starting at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $endAt Search for interviews ending at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var string $location 
    *     @var array $createdBy User Id - search for interviews created by the specified user(s)
    *     @var array $createdAt Search for interviews created at a specific date and time 
    (UTC assumed, [ISO date-time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#rfc.section.5.6)). 
    Prefix with <code>&lt;</code> or <code>&gt;</code> to search dates before or after (inclusive) the specified date and time.
    Specify multiple times to search for a range.
    *     @var array $embed Embed related resources.<br />
    Resources available to embed are: self, evaluations
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
        return '/interviews';
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
        $optionsResolver->setDefined(array('interviewId', 'jobId', 'userId', 'contactId', 'candidateId', 'applicationId', 'type', 'startAt', 'endAt', 'location', 'createdBy', 'createdAt', 'embed', 'offset', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('interviewId', array('array'));
        $optionsResolver->setAllowedTypes('jobId', array('array'));
        $optionsResolver->setAllowedTypes('userId', array('array'));
        $optionsResolver->setAllowedTypes('contactId', array('array'));
        $optionsResolver->setAllowedTypes('candidateId', array('array'));
        $optionsResolver->setAllowedTypes('applicationId', array('array'));
        $optionsResolver->setAllowedTypes('type', array('array'));
        $optionsResolver->setAllowedTypes('startAt', array('array'));
        $optionsResolver->setAllowedTypes('endAt', array('array'));
        $optionsResolver->setAllowedTypes('location', array('string'));
        $optionsResolver->setAllowedTypes('createdBy', array('array'));
        $optionsResolver->setAllowedTypes('createdAt', array('array'));
        $optionsResolver->setAllowedTypes('embed', array('array'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewListRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\InterviewListRepresentation', 'json');
        }
    }
}