<?php

namespace Varspool\JobAdder\V2\Endpoint;

class DeleteJobOrderPayrollBilling extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $jobOrderId;
    /**
     * Applicable to RateCalc generated RateCardID for Astute Payroll
     *
     * @param int $jobOrderId Job Order Id
     */
    public function __construct(int $jobOrderId)
    {
        $this->jobOrderId = $jobOrderId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{jobOrderId}'), array($this->jobOrderId), '/jobs/{jobOrderId}/ratecard');
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
     * @throws \Varspool\JobAdder\V2\Exception\DeleteJobOrderPayrollBillingNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\DeleteJobOrderPayrollBillingNotFoundException();
        }
    }
}