<?php

namespace Varspool\JobAdder\V2\Endpoint;

class DeleteCandidateAvailabilityWeek extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $candidateId;
    /**
     * Remove the candidates availability schedule for a single week
     *
     * @param int $candidateId Candidate Id
     * @param array $queryParameters {
     *     @var string $weekOf Remove availability for the week (beginning Sunday) containing the specified date
     *     @var bool $recurring Remove availability in following weeks. Previous/past recurring schedules will be terminated prior to this schedule, all existing future overlapping schedules will be cancelled.
     *     @var string $until Optional end date of repeating availability removal
     * }
     */
    public function __construct(int $candidateId, array $queryParameters = array())
    {
        $this->candidateId = $candidateId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}'), array($this->candidateId), '/candidates/{candidateId}/availability/weekly');
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
        $optionsResolver->setDefined(array('weekOf', 'recurring', 'until'));
        $optionsResolver->setRequired(array('weekOf'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('weekOf', array('string'));
        $optionsResolver->setAllowedTypes('recurring', array('bool'));
        $optionsResolver->setAllowedTypes('until', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\DeleteCandidateAvailabilityWeekNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\DeleteCandidateAvailabilityWeekNotFoundException();
        }
    }
}