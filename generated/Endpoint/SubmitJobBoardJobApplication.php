<?php

namespace Varspool\JobAdder\V2\Endpoint;

class SubmitJobBoardJobApplication extends \Varspool\JobAdder\V2\Runtime\Client\BaseEndpoint implements \Varspool\JobAdder\V2\Runtime\Client\Endpoint
{
    protected $boardId;
    protected $adId;
    /**
     * 
     *
     * @param int $boardId Job Board Id
     * @param int $adId Job Ad Id
     * @param \Varspool\JobAdder\V2\Model\SubmitJobApplicationCommand $body 
     */
    public function __construct(int $boardId, int $adId, \Varspool\JobAdder\V2\Model\SubmitJobApplicationCommand $body)
    {
        $this->boardId = $boardId;
        $this->adId = $adId;
        $this->body = $body;
    }
    use \Varspool\JobAdder\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{boardId}', '{adId}'), array($this->boardId, $this->adId), '/jobboards/{boardId}/ads/{adId}/applications');
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
     * @throws \Varspool\JobAdder\V2\Exception\SubmitJobBoardJobApplicationUnprocessableEntityException
     *
     * @return null|\Varspool\JobAdder\V2\Model\SubmittedJobApplicationModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\SubmittedJobApplicationModel', 'json');
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\SubmitJobBoardJobApplicationUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('jobadder_identity');
    }
}