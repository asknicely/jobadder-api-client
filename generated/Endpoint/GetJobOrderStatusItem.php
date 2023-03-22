<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetJobOrderStatusItem extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $statusId;
    /**
     * 
     *
     * @param int $statusId 
     */
    public function __construct(int $statusId)
    {
        $this->statusId = $statusId;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{statusId}'), array($this->statusId), '/jobs/lists/status/{statusId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderStatusItemNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\StatusRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\StatusRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetJobOrderStatusItemNotFoundException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\StatusRepresentation', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}