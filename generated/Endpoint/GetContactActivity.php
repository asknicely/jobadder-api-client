<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetContactActivity extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $contactId;
    protected $activityId;
    /**
     * 
     *
     * @param int $contactId Contact Id
     * @param int $activityId Activity Id
     */
    public function __construct(int $contactId, int $activityId)
    {
        $this->contactId = $contactId;
        $this->activityId = $activityId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{contactId}', '{activityId}'), array($this->contactId, $this->activityId), '/contacts/{contactId}/activities/{activityId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetContactActivityNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\ContactActivityRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ContactActivityRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetContactActivityNotFoundException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}