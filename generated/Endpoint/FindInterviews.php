<?php

namespace Varspool\JobAdder\V2\Endpoint;

class FindInterviews extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
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
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
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
        $optionsResolver->addAllowedTypes('interviewId', array('array'));
        $optionsResolver->addAllowedTypes('jobId', array('array'));
        $optionsResolver->addAllowedTypes('userId', array('array'));
        $optionsResolver->addAllowedTypes('contactId', array('array'));
        $optionsResolver->addAllowedTypes('candidateId', array('array'));
        $optionsResolver->addAllowedTypes('applicationId', array('array'));
        $optionsResolver->addAllowedTypes('type', array('array'));
        $optionsResolver->addAllowedTypes('startAt', array('array'));
        $optionsResolver->addAllowedTypes('endAt', array('array'));
        $optionsResolver->addAllowedTypes('location', array('string'));
        $optionsResolver->addAllowedTypes('createdBy', array('array'));
        $optionsResolver->addAllowedTypes('createdAt', array('array'));
        $optionsResolver->addAllowedTypes('embed', array('array'));
        $optionsResolver->addAllowedTypes('offset', array('int'));
        $optionsResolver->addAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Varspool\JobAdder\V2\Model\InterviewListRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\InterviewListRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}