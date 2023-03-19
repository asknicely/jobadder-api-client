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
class ContactRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\ContactRepresentation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\ContactRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\ContactRepresentation();
        if (property_exists($data, 'contactId')) {
            $object->setContactId($data->{'contactId'});
        }
        if (property_exists($data, 'firstName')) {
            $object->setFirstName($data->{'firstName'});
        }
        if (property_exists($data, 'lastName')) {
            $object->setLastName($data->{'lastName'});
        }
        if (property_exists($data, 'position')) {
            $object->setPosition($data->{'position'});
        }
        if (property_exists($data, 'salutation')) {
            $object->setSalutation($data->{'salutation'});
        }
        if (property_exists($data, 'unsubscribed')) {
            $object->setUnsubscribed($data->{'unsubscribed'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'phone')) {
            $object->setPhone($data->{'phone'});
        }
        if (property_exists($data, 'mobile')) {
            $object->setMobile($data->{'mobile'});
        }
        if (property_exists($data, 'inactive')) {
            $object->setInactive($data->{'inactive'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->denormalizer->denormalize($data->{'status'}, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->denormalizer->denormalize($data->{'company'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context));
        }
        if (property_exists($data, 'officeAddress')) {
            $object->setOfficeAddress($this->denormalizer->denormalize($data->{'officeAddress'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'json', $context));
        }
        if (property_exists($data, 'previousContactId')) {
            $object->setPreviousContactId($data->{'previousContactId'});
        }
        if (property_exists($data, 'originalContactId')) {
            $object->setOriginalContactId($data->{'originalContactId'});
        }
        if (property_exists($data, 'otherEmail')) {
            $values = array();
            foreach ($data->{'otherEmail'} as $value) {
                $values[] = $value;
            }
            $object->setOtherEmail($values);
        }
        if (property_exists($data, 'social')) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'social'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setSocial($values_1);
        }
        if (property_exists($data, 'summary')) {
            $object->setSummary($data->{'summary'});
        }
        if (property_exists($data, 'reportsTo')) {
            $object->setReportsTo($this->denormalizer->denormalize($data->{'reportsTo'}, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (property_exists($data, 'hiringManager')) {
            $object->setHiringManager($data->{'hiringManager'});
        }
        if (property_exists($data, 'custom')) {
            $values_2 = array();
            foreach ($data->{'custom'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_2);
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'recruiters')) {
            $values_3 = array();
            foreach ($data->{'recruiters'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setRecruiters($values_3);
        }
        if (property_exists($data, 'partnerActions')) {
            $values_4 = array();
            foreach ($data->{'partnerActions'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel', 'json', $context);
            }
            $object->setPartnerActions($values_4);
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
        if (property_exists($data, 'links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\ContactLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getContactId()) {
            $data->{'contactId'} = $object->getContactId();
        }
        if (null !== $object->getFirstName()) {
            $data->{'firstName'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'lastName'} = $object->getLastName();
        }
        if (null !== $object->getPosition()) {
            $data->{'position'} = $object->getPosition();
        }
        if (null !== $object->getSalutation()) {
            $data->{'salutation'} = $object->getSalutation();
        }
        if (null !== $object->getUnsubscribed()) {
            $data->{'unsubscribed'} = $object->getUnsubscribed();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getPhone()) {
            $data->{'phone'} = $object->getPhone();
        }
        if (null !== $object->getMobile()) {
            $data->{'mobile'} = $object->getMobile();
        }
        if (null !== $object->getInactive()) {
            $data->{'inactive'} = $object->getInactive();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if (null !== $object->getOfficeAddress()) {
            $data->{'officeAddress'} = $this->normalizer->normalize($object->getOfficeAddress(), 'json', $context);
        }
        if (null !== $object->getPreviousContactId()) {
            $data->{'previousContactId'} = $object->getPreviousContactId();
        }
        if (null !== $object->getOriginalContactId()) {
            $data->{'originalContactId'} = $object->getOriginalContactId();
        }
        if (null !== $object->getOtherEmail()) {
            $values = array();
            foreach ($object->getOtherEmail() as $value) {
                $values[] = $value;
            }
            $data->{'otherEmail'} = $values;
        }
        if (null !== $object->getSocial()) {
            $values_1 = new \stdClass();
            foreach ($object->getSocial() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'social'} = $values_1;
        }
        if (null !== $object->getSummary()) {
            $data->{'summary'} = $object->getSummary();
        }
        if (null !== $object->getReportsTo()) {
            $data->{'reportsTo'} = $this->normalizer->normalize($object->getReportsTo(), 'json', $context);
        }
        if (null !== $object->getHiringManager()) {
            $data->{'hiringManager'} = $object->getHiringManager();
        }
        if (null !== $object->getCustom()) {
            $values_2 = array();
            foreach ($object->getCustom() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'custom'} = $values_2;
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getRecruiters()) {
            $values_3 = array();
            foreach ($object->getRecruiters() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'recruiters'} = $values_3;
        }
        if (null !== $object->getPartnerActions()) {
            $values_4 = array();
            foreach ($object->getPartnerActions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'partnerActions'} = $values_4;
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
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}