<?php

namespace Varspool\JobAdder\V2\Endpoint;

class DeleteCandidateCategory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $candidateId;
    protected $categoryId;
    /**
     * Remove a single category and all associated sub-categories and skills
     *
     * @param int $candidateId 
     * @param int $categoryId 
     */
    public function __construct(int $candidateId, int $categoryId)
    {
        $this->candidateId = $candidateId;
        $this->categoryId = $categoryId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{candidateId}', '{categoryId}'), array($this->candidateId, $this->categoryId), '/candidates/{candidateId}/skills/{categoryId}');
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
     * @return null|\Varspool\JobAdder\V2\Model\CategoryListRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\CategoryListRepresentation', 'json');
        }
    }
}