<?php

namespace Varspool\JobAdder\V2\Endpoint;

class GetJobOrderPayrollBilling extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
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
        return 'GET';
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
     * @throws \Varspool\JobAdder\V2\Exception\GetJobOrderPayrollBillingNotFoundException
     *
     * @return null|\Varspool\JobAdder\V2\Model\JobOrderRateCardModel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Varspool\\JobAdder\\V2\\Model\\JobOrderRateCardModel', 'json');
        }
        if (404 === $status) {
            throw new \Varspool\JobAdder\V2\Exception\GetJobOrderPayrollBillingNotFoundException();
        }
    }
}