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
class CandidateRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidateRepresentation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidateRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidateRepresentation();
        if (property_exists($data, 'candidateId')) {
            $object->setCandidateId($data->{'candidateId'});
        }
        if (property_exists($data, 'firstName')) {
            $object->setFirstName($data->{'firstName'});
        }
        if (property_exists($data, 'lastName')) {
            $object->setLastName($data->{'lastName'});
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
        if (property_exists($data, 'contactMethod')) {
            $object->setContactMethod($data->{'contactMethod'});
        }
        if (property_exists($data, 'salutation')) {
            $object->setSalutation($data->{'salutation'});
        }
        if (property_exists($data, 'unsubscribed')) {
            $object->setUnsubscribed($data->{'unsubscribed'});
        }
        if (property_exists($data, 'address')) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Varspool\\JobAdder\\V2\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->denormalizer->denormalize($data->{'status'}, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
        }
        if (property_exists($data, 'rating')) {
            $object->setRating($data->{'rating'});
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'seeking')) {
            $object->setSeeking($data->{'seeking'});
        }
        if (property_exists($data, 'dateOfBirth')) {
            $object->setDateOfBirth(\DateTime::createFromFormat('Y-m-d', $data->{'dateOfBirth'})->setTime(0, 0, 0));
        }
        if (property_exists($data, 'emergencyContact')) {
            $object->setEmergencyContact($data->{'emergencyContact'});
        }
        if (property_exists($data, 'emergencyPhone')) {
            $object->setEmergencyPhone($data->{'emergencyPhone'});
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
        if (property_exists($data, 'employment')) {
            $object->setEmployment($this->denormalizer->denormalize($data->{'employment'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateEmploymentModel', 'json', $context));
        }
        if (property_exists($data, 'availability')) {
            $object->setAvailability($this->denormalizer->denormalize($data->{'availability'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateStartModel', 'json', $context));
        }
        if (property_exists($data, 'education')) {
            $values_2 = array();
            foreach ($data->{'education'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\CandidateEducationModel', 'json', $context);
            }
            $object->setEducation($values_2);
        }
        if (property_exists($data, 'skillTags')) {
            $values_3 = array();
            foreach ($data->{'skillTags'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setSkillTags($values_3);
        }
        if (property_exists($data, 'custom')) {
            $values_4 = array();
            foreach ($data->{'custom'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_4);
        }
        if (property_exists($data, 'recruiters')) {
            $values_5 = array();
            foreach ($data->{'recruiters'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setRecruiters($values_5);
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
        if (property_exists($data, 'partnerActions')) {
            $values_6 = array();
            foreach ($data->{'partnerActions'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel', 'json', $context);
            }
            $object->setPartnerActions($values_6);
        }
        if (property_exists($data, 'statistics')) {
            $object->setStatistics($this->denormalizer->denormalize($data->{'statistics'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateStatisticsModel', 'json', $context));
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCandidateId()) {
            $data->{'candidateId'} = $object->getCandidateId();
        }
        if (null !== $object->getFirstName()) {
            $data->{'firstName'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'lastName'} = $object->getLastName();
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
        if (null !== $object->getContactMethod()) {
            $data->{'contactMethod'} = $object->getContactMethod();
        }
        if (null !== $object->getSalutation()) {
            $data->{'salutation'} = $object->getSalutation();
        }
        if (null !== $object->getUnsubscribed()) {
            $data->{'unsubscribed'} = $object->getUnsubscribed();
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getRating()) {
            $data->{'rating'} = $object->getRating();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getSeeking()) {
            $data->{'seeking'} = $object->getSeeking();
        }
        if (null !== $object->getDateOfBirth()) {
            $data->{'dateOfBirth'} = $object->getDateOfBirth()->format('Y-m-d');
        }
        if (null !== $object->getEmergencyContact()) {
            $data->{'emergencyContact'} = $object->getEmergencyContact();
        }
        if (null !== $object->getEmergencyPhone()) {
            $data->{'emergencyPhone'} = $object->getEmergencyPhone();
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
        if (null !== $object->getEmployment()) {
            $data->{'employment'} = $this->normalizer->normalize($object->getEmployment(), 'json', $context);
        }
        if (null !== $object->getAvailability()) {
            $data->{'availability'} = $this->normalizer->normalize($object->getAvailability(), 'json', $context);
        }
        if (null !== $object->getEducation()) {
            $values_2 = array();
            foreach ($object->getEducation() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'education'} = $values_2;
        }
        if (null !== $object->getSkillTags()) {
            $values_3 = array();
            foreach ($object->getSkillTags() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'skillTags'} = $values_3;
        }
        if (null !== $object->getCustom()) {
            $values_4 = array();
            foreach ($object->getCustom() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'custom'} = $values_4;
        }
        if (null !== $object->getRecruiters()) {
            $values_5 = array();
            foreach ($object->getRecruiters() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'recruiters'} = $values_5;
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
        if (null !== $object->getPartnerActions()) {
            $values_6 = array();
            foreach ($object->getPartnerActions() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'partnerActions'} = $values_6;
        }
        if (null !== $object->getStatistics()) {
            $data->{'statistics'} = $this->normalizer->normalize($object->getStatistics(), 'json', $context);
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}