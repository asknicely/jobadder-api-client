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
class SubmitPlacementBillingModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementBillingModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementBillingModel';
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
        $object = new \Varspool\JobAdder\V2\Model\SubmitPlacementBillingModel();
        if (property_exists($data, 'contactId')) {
            $object->setContactId($data->{'contactId'});
        }
        if (property_exists($data, 'addressId')) {
            $object->setAddressId($data->{'addressId'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'orderRef')) {
            $object->setOrderRef($data->{'orderRef'});
        }
        if (property_exists($data, 'invoiceRef')) {
            $object->setInvoiceRef($data->{'invoiceRef'});
        }
        if (property_exists($data, 'terms')) {
            $object->setTerms($data->{'terms'});
        }
        if (property_exists($data, 'dueDate')) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d', $data->{'dueDate'})->setTime(0, 0, 0));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getContactId()) {
            $data->{'contactId'} = $object->getContactId();
        }
        if (null !== $object->getAddressId()) {
            $data->{'addressId'} = $object->getAddressId();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getOrderRef()) {
            $data->{'orderRef'} = $object->getOrderRef();
        }
        if (null !== $object->getInvoiceRef()) {
            $data->{'invoiceRef'} = $object->getInvoiceRef();
        }
        if (null !== $object->getTerms()) {
            $data->{'terms'} = $object->getTerms();
        }
        if (null !== $object->getDueDate()) {
            $data->{'dueDate'} = $object->getDueDate()->format('Y-m-d');
        }
        return $data;
    }
}