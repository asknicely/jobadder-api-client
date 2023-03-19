<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetJobBoardJobAd extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $boardId;
    protected $adId;
    /**
     * 
     *
     * @param int $boardId 
     * @param int $adId 
     */
    public function __construct(int $boardId, int $adId)
    {
        $this->boardId = $boardId;
        $this->adId = $adId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{boardId}', '{adId}'), array($this->boardId, $this->adId), '/jobboards/{boardId}/ads/{adId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\GetJobBoardJobAdNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobBoardJobAdRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobBoardJobAdRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetJobBoardJobAdNotFoundException();
        }
    }
}