<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PutCompanyStatus extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $companyId;
    /**
     * Change the company status and add an optional note
     *
     * @param int $companyId 
     * @param \Varspool\JobAdder\V2\Model\SetCompanyStatusCommand $body 
     */
    public function __construct(int $companyId, \Varspool\JobAdder\V2\Model\SetCompanyStatusCommand $body)
    {
        $this->companyId = $companyId;
        $this->body = $body;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}'), array($this->companyId), '/companies/{companyId}/status');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\PutCompanyStatusNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PutCompanyStatusUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (202 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutCompanyStatusNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PutCompanyStatusUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}