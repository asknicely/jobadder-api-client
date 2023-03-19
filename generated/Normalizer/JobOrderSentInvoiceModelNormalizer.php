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
class JobOrderSentInvoiceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderSentInvoiceModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderSentInvoiceModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderSentInvoiceModel();
        if (property_exists($data, 'billingContactNames')) {
            $object->setBillingContactNames($data->{'billingContactNames'});
        }
        if (property_exists($data, 'billingContactEmails')) {
            $object->setBillingContactEmails($data->{'billingContactEmails'});
        }
        if (property_exists($data, 'poNumber')) {
            $object->setPoNumber($data->{'poNumber'});
        }
        if (property_exists($data, 'paymentTermsDays')) {
            $object->setPaymentTermsDays($data->{'paymentTermsDays'});
        }
        if (property_exists($data, 'dueDate')) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'dueDate'}));
        }
        if (property_exists($data, 'sentAt')) {
            $object->setSentAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'sentAt'}));
        }
        if (property_exists($data, 'sentBy')) {
            $object->setSentBy($this->denormalizer->denormalize($data->{'sentBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBillingContactNames()) {
            $data->{'billingContactNames'} = $object->getBillingContactNames();
        }
        if (null !== $object->getBillingContactEmails()) {
            $data->{'billingContactEmails'} = $object->getBillingContactEmails();
        }
        if (null !== $object->getPoNumber()) {
            $data->{'poNumber'} = $object->getPoNumber();
        }
        if (null !== $object->getPaymentTermsDays()) {
            $data->{'paymentTermsDays'} = $object->getPaymentTermsDays();
        }
        if (null !== $object->getDueDate()) {
            $data->{'dueDate'} = $object->getDueDate()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getSentAt()) {
            $data->{'sentAt'} = $object->getSentAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getSentBy()) {
            $data->{'sentBy'} = $this->normalizer->normalize($object->getSentBy(), 'json', $context);
        }
        return $data;
    }
}