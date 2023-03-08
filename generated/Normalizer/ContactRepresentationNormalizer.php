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
class ContactRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\ContactRepresentation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\ContactRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\ContactRepresentation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contactId', $data)) {
            $object->setContactId($data['contactId']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('salutation', $data)) {
            $object->setSalutation($data['salutation']);
        }
        if (\array_key_exists('unsubscribed', $data)) {
            $object->setUnsubscribed($data['unsubscribed']);
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
        if (\array_key_exists('inactive', $data)) {
            $object->setInactive($data['inactive']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context));
        }
        if (\array_key_exists('officeAddress', $data)) {
            $object->setOfficeAddress($this->denormalizer->denormalize($data['officeAddress'], 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'json', $context));
        }
        if (\array_key_exists('previousContactId', $data)) {
            $object->setPreviousContactId($data['previousContactId']);
        }
        if (\array_key_exists('originalContactId', $data)) {
            $object->setOriginalContactId($data['originalContactId']);
        }
        if (\array_key_exists('otherEmail', $data)) {
            $values = array();
            foreach ($data['otherEmail'] as $value) {
                $values[] = $value;
            }
            $object->setOtherEmail($values);
        }
        if (\array_key_exists('social', $data)) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['social'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setSocial($values_1);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('reportsTo', $data)) {
            $object->setReportsTo($this->denormalizer->denormalize($data['reportsTo'], 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (\array_key_exists('hiringManager', $data)) {
            $object->setHiringManager($data['hiringManager']);
        }
        if (\array_key_exists('custom', $data)) {
            $values_2 = array();
            foreach ($data['custom'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_2);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('recruiters', $data)) {
            $values_3 = array();
            foreach ($data['recruiters'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setRecruiters($values_3);
        }
        if (\array_key_exists('partnerActions', $data)) {
            $values_4 = array();
            foreach ($data['partnerActions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel', 'json', $context);
            }
            $object->setPartnerActions($values_4);
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
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\ContactLinks', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['contactId'] = $object->getContactId();
        if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('salutation') && null !== $object->getSalutation()) {
            $data['salutation'] = $object->getSalutation();
        }
        if ($object->isInitialized('unsubscribed') && null !== $object->getUnsubscribed()) {
            $data['unsubscribed'] = $object->getUnsubscribed();
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
        if ($object->isInitialized('inactive') && null !== $object->getInactive()) {
            $data['inactive'] = $object->getInactive();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if ($object->isInitialized('officeAddress') && null !== $object->getOfficeAddress()) {
            $data['officeAddress'] = $this->normalizer->normalize($object->getOfficeAddress(), 'json', $context);
        }
        if ($object->isInitialized('previousContactId') && null !== $object->getPreviousContactId()) {
            $data['previousContactId'] = $object->getPreviousContactId();
        }
        if ($object->isInitialized('originalContactId') && null !== $object->getOriginalContactId()) {
            $data['originalContactId'] = $object->getOriginalContactId();
        }
        if ($object->isInitialized('otherEmail') && null !== $object->getOtherEmail()) {
            $values = array();
            foreach ($object->getOtherEmail() as $value) {
                $values[] = $value;
            }
            $data['otherEmail'] = $values;
        }
        if ($object->isInitialized('social') && null !== $object->getSocial()) {
            $values_1 = array();
            foreach ($object->getSocial() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['social'] = $values_1;
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('reportsTo') && null !== $object->getReportsTo()) {
            $data['reportsTo'] = $this->normalizer->normalize($object->getReportsTo(), 'json', $context);
        }
        if ($object->isInitialized('hiringManager') && null !== $object->getHiringManager()) {
            $data['hiringManager'] = $object->getHiringManager();
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values_2 = array();
            foreach ($object->getCustom() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['custom'] = $values_2;
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if ($object->isInitialized('recruiters') && null !== $object->getRecruiters()) {
            $values_3 = array();
            foreach ($object->getRecruiters() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['recruiters'] = $values_3;
        }
        if ($object->isInitialized('partnerActions') && null !== $object->getPartnerActions()) {
            $values_4 = array();
            foreach ($object->getPartnerActions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['partnerActions'] = $values_4;
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
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}