<?php

namespace Varspool\JobAdder\V2\Endpoint;

class PatchFolder extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $folderId;
    /**
     * Allows bulk adding or removing of entities (jobs, candidates, applications, placements, companies and contacts) for a specific folder
     *
     * @param int $folderId Folder Id
     * @param \Varspool\JobAdder\V2\Model\Operation[] $operations 
     */
    public function __construct(int $folderId, array $operations)
    {
        $this->folderId = $folderId;
        $this->body = $operations;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{folderId}'), array($this->folderId), '/folders/{folderId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\PatchFolderNotFoundException
     * @throws \Varspool\JobAdder\V2\Exception\PatchFolderUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PatchFolderNotFoundException();
        }
        if (422 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\PatchFolderUnprocessableEntityException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}