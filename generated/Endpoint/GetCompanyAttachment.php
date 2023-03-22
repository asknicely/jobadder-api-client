<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetCompanyAttachment extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $companyId;
    protected $attach;
    /**
     * 
     *
     * @param int $companyId 
     * @param int $attach 
     */
    public function __construct(int $companyId, int $attach)
    {
        $this->companyId = $companyId;
        $this->attach = $attach;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{companyId}', '{attach}'), array($this->companyId, $this->attach), '/companies/{companyId}/attachments/{attach}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Varspool\JobAdder\V2\Exception\GetCompanyAttachmentNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetCompanyAttachmentNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}