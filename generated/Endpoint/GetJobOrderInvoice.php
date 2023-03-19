<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetJobOrderInvoice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $jobId;
    protected $invoiceId;
    /**
     * 
     *
     * @param int $jobId Job Id
     * @param int $invoiceId Invoice Id
     */
    public function __construct(int $jobId, int $invoiceId)
    {
        $this->jobId = $jobId;
        $this->invoiceId = $invoiceId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{jobId}', '{invoiceId}'), array($this->jobId, $this->invoiceId), '/jobs/{jobId}/invoices/{invoiceId}');
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
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderInvoiceNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderRetainedInvoiceRepresentation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobOrderRetainedInvoiceRepresentation', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetJobOrderInvoiceNotFoundException($serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\ErrorModel', 'json'));
        }
    }
}