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
class JobOrderSentInvoiceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderSentInvoiceModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderSentInvoiceModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderSentInvoiceModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billingContactNames', $data)) {
            $object->setBillingContactNames($data['billingContactNames']);
        }
        if (\array_key_exists('billingContactEmails', $data)) {
            $object->setBillingContactEmails($data['billingContactEmails']);
        }
        if (\array_key_exists('poNumber', $data)) {
            $object->setPoNumber($data['poNumber']);
        }
        if (\array_key_exists('paymentTermsDays', $data)) {
            $object->setPaymentTermsDays($data['paymentTermsDays']);
        }
        if (\array_key_exists('dueDate', $data)) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['dueDate']));
        }
        if (\array_key_exists('sentAt', $data)) {
            $object->setSentAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['sentAt']));
        }
        if (\array_key_exists('sentBy', $data)) {
            $object->setSentBy($this->denormalizer->denormalize($data['sentBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('billingContactNames') && null !== $object->getBillingContactNames()) {
            $data['billingContactNames'] = $object->getBillingContactNames();
        }
        if ($object->isInitialized('billingContactEmails') && null !== $object->getBillingContactEmails()) {
            $data['billingContactEmails'] = $object->getBillingContactEmails();
        }
        if ($object->isInitialized('poNumber') && null !== $object->getPoNumber()) {
            $data['poNumber'] = $object->getPoNumber();
        }
        if ($object->isInitialized('paymentTermsDays') && null !== $object->getPaymentTermsDays()) {
            $data['paymentTermsDays'] = $object->getPaymentTermsDays();
        }
        if ($object->isInitialized('dueDate') && null !== $object->getDueDate()) {
            $data['dueDate'] = $object->getDueDate()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('sentAt') && null !== $object->getSentAt()) {
            $data['sentAt'] = $object->getSentAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('sentBy') && null !== $object->getSentBy()) {
            $data['sentBy'] = $this->normalizer->normalize($object->getSentBy(), 'json', $context);
        }
        return $data;
    }
}