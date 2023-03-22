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
class PlacementBillingModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementBillingModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementBillingModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementBillingModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'json', $context));
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('orderRef', $data)) {
            $object->setOrderRef($data['orderRef']);
        }
        if (\array_key_exists('invoiceRef', $data)) {
            $object->setInvoiceRef($data['invoiceRef']);
        }
        if (\array_key_exists('terms', $data)) {
            $object->setTerms($data['terms']);
        }
        if (\array_key_exists('dueDate', $data)) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d', $data['dueDate'])->setTime(0, 0, 0));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('orderRef') && null !== $object->getOrderRef()) {
            $data['orderRef'] = $object->getOrderRef();
        }
        if ($object->isInitialized('invoiceRef') && null !== $object->getInvoiceRef()) {
            $data['invoiceRef'] = $object->getInvoiceRef();
        }
        if ($object->isInitialized('terms') && null !== $object->getTerms()) {
            $data['terms'] = $object->getTerms();
        }
        if ($object->isInitialized('dueDate') && null !== $object->getDueDate()) {
            $data['dueDate'] = $object->getDueDate()->format('Y-m-d');
        }
        return $data;
    }
}