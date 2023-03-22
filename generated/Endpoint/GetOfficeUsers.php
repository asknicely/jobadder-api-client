<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetOfficeUsers extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $officeId;
    /**
     * 
     *
     * @param int $officeId Office Id
     */
    public function __construct(int $officeId)
    {
        $this->officeId = $officeId;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{officeId}'), array($this->officeId), '/useroffices/{officeId}/users');
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
     *
     * @return null|\Varspool\JobAdder\V2\Model\UserListRepresentation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\UserListRepresentation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}