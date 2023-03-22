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
class JobOrderInvoiceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderInvoiceModel();
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
        if (\array_key_exists('triggerType', $data)) {
            $object->setTriggerType($data['triggerType']);
        }
        if (\array_key_exists('triggerJobOrderStatus', $data)) {
            $object->setTriggerJobOrderStatus($this->denormalizer->denormalize($data['triggerJobOrderStatus'], 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
        }
        if (\array_key_exists('triggerAt', $data)) {
            $object->setTriggerAt(\DateTime::createFromFormat('Y-m-d', $data['triggerAt'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('forecastedDate', $data)) {
            $object->setForecastedDate(\DateTime::createFromFormat('Y-m-d', $data['forecastedDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('expenses', $data)) {
            $object->setExpenses($this->denormalizer->denormalize($data['expenses'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceExpenseListModel', 'json', $context));
        }
        if (\array_key_exists('sentDetails', $data)) {
            $object->setSentDetails($this->denormalizer->denormalize($data['sentDetails'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderSentInvoiceModel', 'json', $context));
        }
        if (\array_key_exists('placements', $data)) {
            $object->setPlacements($this->denormalizer->denormalize($data['placements'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoicePlacementListModel', 'json', $context));
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['createdBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        if (\array_key_exists('updatedBy', $data)) {
            $object->setUpdatedBy($this->denormalizer->denormalize($data['updatedBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['updatedAt']));
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
        if ($object->isInitialized('triggerType') && null !== $object->getTriggerType()) {
            $data['triggerType'] = $object->getTriggerType();
        }
        if ($object->isInitialized('triggerJobOrderStatus') && null !== $object->getTriggerJobOrderStatus()) {
            $data['triggerJobOrderStatus'] = $this->normalizer->normalize($object->getTriggerJobOrderStatus(), 'json', $context);
        }
        if ($object->isInitialized('triggerAt') && null !== $object->getTriggerAt()) {
            $data['triggerAt'] = $object->getTriggerAt()->format('Y-m-d');
        }
        if ($object->isInitialized('forecastedDate') && null !== $object->getForecastedDate()) {
            $data['forecastedDate'] = $object->getForecastedDate()->format('Y-m-d');
        }
        if ($object->isInitialized('expenses') && null !== $object->getExpenses()) {
            $data['expenses'] = $this->normalizer->normalize($object->getExpenses(), 'json', $context);
        }
        if ($object->isInitialized('sentDetails') && null !== $object->getSentDetails()) {
            $data['sentDetails'] = $this->normalizer->normalize($object->getSentDetails(), 'json', $context);
        }
        if ($object->isInitialized('placements') && null !== $object->getPlacements()) {
            $data['placements'] = $this->normalizer->normalize($object->getPlacements(), 'json', $context);
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['createdBy'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('updatedBy') && null !== $object->getUpdatedBy()) {
            $data['updatedBy'] = $this->normalizer->normalize($object->getUpdatedBy(), 'json', $context);
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}