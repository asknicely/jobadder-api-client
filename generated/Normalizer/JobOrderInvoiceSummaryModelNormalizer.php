<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Varspool\JobAdder\V2\Runtime\Normalizer\CheckArray;
use Varspool\JobAdder\V2\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JobOrderInvoiceSummaryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceSummaryModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceSummaryModel';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Varspool\JobAdder\V2\Model\JobOrderInvoiceSummaryModel();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('jobId', $data)) {
            $object->setJobId($data['jobId']);
        }
        if (\array_key_exists('invoiceId', $data)) {
            $object->setInvoiceId($data['invoiceId']);
        }
        if (\array_key_exists('invoiceNumber', $data)) {
            $object->setInvoiceNumber($data['invoiceNumber']);
        }
        if (\array_key_exists('stage', $data)) {
            $object->setStage($this->denormalizer->denormalize($data['stage'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceStageModel', 'json', $context));
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('jobId') && null !== $object->getJobId()) {
            $data['jobId'] = $object->getJobId();
        }
        if ($object->isInitialized('invoiceId') && null !== $object->getInvoiceId()) {
            $data['invoiceId'] = $object->getInvoiceId();
        }
        if ($object->isInitialized('invoiceNumber') && null !== $object->getInvoiceNumber()) {
            $data['invoiceNumber'] = $object->getInvoiceNumber();
        }
        if ($object->isInitialized('stage') && null !== $object->getStage()) {
            $data['stage'] = $this->normalizer->normalize($object->getStage(), 'json', $context);
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        return $data;
    }
}