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
class AddContactCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\AddContactCommand';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\AddContactCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\AddContactCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('mobile', $data)) {
            $object->setMobile($data['mobile']);
        }
        if (\array_key_exists('salutation', $data)) {
            $object->setSalutation($data['salutation']);
        }
        if (\array_key_exists('unsubscribed', $data)) {
            $object->setUnsubscribed($data['unsubscribed']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('social', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['social'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSocial($values);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('companyId', $data)) {
            $object->setCompanyId($data['companyId']);
        }
        if (\array_key_exists('reportsToContactId', $data)) {
            $object->setReportsToContactId($data['reportsToContactId']);
        }
        if (\array_key_exists('officeAddressId', $data)) {
            $object->setOfficeAddressId($data['officeAddressId']);
        }
        if (\array_key_exists('statusId', $data)) {
            $object->setStatusId($data['statusId']);
        }
        if (\array_key_exists('custom', $data)) {
            $values_1 = array();
            foreach ($data['custom'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_1);
        }
        if (\array_key_exists('ownerUserId', $data)) {
            $object->setOwnerUserId($data['ownerUserId']);
        }
        if (\array_key_exists('recruiterUserId', $data)) {
            $values_2 = array();
            foreach ($data['recruiterUserId'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRecruiterUserId($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('phone') && null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if ($object->isInitialized('mobile') && null !== $object->getMobile()) {
            $data['mobile'] = $object->getMobile();
        }
        if ($object->isInitialized('salutation') && null !== $object->getSalutation()) {
            $data['salutation'] = $object->getSalutation();
        }
        if ($object->isInitialized('unsubscribed') && null !== $object->getUnsubscribed()) {
            $data['unsubscribed'] = $object->getUnsubscribed();
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('social') && null !== $object->getSocial()) {
            $values = array();
            foreach ($object->getSocial() as $key => $value) {
                $values[$key] = $value;
            }
            $data['social'] = $values;
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('companyId') && null !== $object->getCompanyId()) {
            $data['companyId'] = $object->getCompanyId();
        }
        if ($object->isInitialized('reportsToContactId') && null !== $object->getReportsToContactId()) {
            $data['reportsToContactId'] = $object->getReportsToContactId();
        }
        if ($object->isInitialized('officeAddressId') && null !== $object->getOfficeAddressId()) {
            $data['officeAddressId'] = $object->getOfficeAddressId();
        }
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['statusId'] = $object->getStatusId();
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values_1 = array();
            foreach ($object->getCustom() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom'] = $values_1;
        }
        if ($object->isInitialized('ownerUserId') && null !== $object->getOwnerUserId()) {
            $data['ownerUserId'] = $object->getOwnerUserId();
        }
        if ($object->isInitialized('recruiterUserId') && null !== $object->getRecruiterUserId()) {
            $values_2 = array();
            foreach ($object->getRecruiterUserId() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['recruiterUserId'] = $values_2;
        }
        return $data;
    }
}