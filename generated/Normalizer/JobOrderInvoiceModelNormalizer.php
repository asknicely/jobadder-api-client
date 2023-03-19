<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \Varspool\JobAdder\V2\Model\JobOrderInvoiceModel();
        if (property_exists($data, 'jobId')) {
            $object->setJobId($data->{'jobId'});
        }
        if (property_exists($data, 'invoiceId')) {
            $object->setInvoiceId($data->{'invoiceId'});
        }
        if (property_exists($data, 'invoiceNumber')) {
            $object->setInvoiceNumber($data->{'invoiceNumber'});
        }
        if (property_exists($data, 'stage')) {
            $object->setStage($this->denormalizer->denormalize($data->{'stage'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceStageModel', 'json', $context));
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'triggerType')) {
            $object->setTriggerType($data->{'triggerType'});
        }
        if (property_exists($data, 'triggerJobOrderStatus')) {
            $object->setTriggerJobOrderStatus($this->denormalizer->denormalize($data->{'triggerJobOrderStatus'}, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
        }
        if (property_exists($data, 'triggerAt')) {
            $object->setTriggerAt(\DateTime::createFromFormat('Y-m-d', $data->{'triggerAt'})->setTime(0, 0, 0));
        }
        if (property_exists($data, 'forecastedDate')) {
            $object->setForecastedDate(\DateTime::createFromFormat('Y-m-d', $data->{'forecastedDate'})->setTime(0, 0, 0));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'expenses')) {
            $object->setExpenses($this->denormalizer->denormalize($data->{'expenses'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoiceExpenseListModel', 'json', $context));
        }
        if (property_exists($data, 'sentDetails')) {
            $object->setSentDetails($this->denormalizer->denormalize($data->{'sentDetails'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSentInvoiceModel', 'json', $context));
        }
        if (property_exists($data, 'placements')) {
            $object->setPlacements($this->denormalizer->denormalize($data->{'placements'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderInvoicePlacementListModel', 'json', $context));
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($this->denormalizer->denormalize($data->{'createdBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedBy')) {
            $object->setUpdatedBy($this->denormalizer->denormalize($data->{'updatedBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'updatedAt'}));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getJobId()) {
            $data->{'jobId'} = $object->getJobId();
        }
        if (null !== $object->getInvoiceId()) {
            $data->{'invoiceId'} = $object->getInvoiceId();
        }
        if (null !== $object->getInvoiceNumber()) {
            $data->{'invoiceNumber'} = $object->getInvoiceNumber();
        }
        if (null !== $object->getStage()) {
            $data->{'stage'} = $this->normalizer->normalize($object->getStage(), 'json', $context);
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getTriggerType()) {
            $data->{'triggerType'} = $object->getTriggerType();
        }
        if (null !== $object->getTriggerJobOrderStatus()) {
            $data->{'triggerJobOrderStatus'} = $this->normalizer->normalize($object->getTriggerJobOrderStatus(), 'json', $context);
        }
        if (null !== $object->getTriggerAt()) {
            $data->{'triggerAt'} = $object->getTriggerAt()->format('Y-m-d');
        }
        if (null !== $object->getForecastedDate()) {
            $data->{'forecastedDate'} = $object->getForecastedDate()->format('Y-m-d');
        }
        if (null !== $object->getExpenses()) {
            $data->{'expenses'} = $this->normalizer->normalize($object->getExpenses(), 'json', $context);
        }
        if (null !== $object->getSentDetails()) {
            $data->{'sentDetails'} = $this->normalizer->normalize($object->getSentDetails(), 'json', $context);
        }
        if (null !== $object->getPlacements()) {
            $data->{'placements'} = $this->normalizer->normalize($object->getPlacements(), 'json', $context);
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getUpdatedBy()) {
            $data->{'updatedBy'} = $this->normalizer->normalize($object->getUpdatedBy(), 'json', $context);
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}