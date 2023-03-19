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
class AddCandidateCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\AddCandidateCommand';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\AddCandidateCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\AddCandidateCommand();
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
        if (property_exists($data, 'salutation')) {
            $object->setSalutation($data->{'salutation'});
        }
        if (property_exists($data, 'statusId')) {
            $object->setStatusId($data->{'statusId'});
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
        if (property_exists($data, 'unsubscribed')) {
            $object->setUnsubscribed($data->{'unsubscribed'});
        }
        if (property_exists($data, 'summary')) {
            $object->setSummary($data->{'summary'});
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
        if (property_exists($data, 'social')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'social'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSocial($values);
        }
        if (property_exists($data, 'address')) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitAddressModel', 'json', $context));
        }
        if (property_exists($data, 'skillTags')) {
            $values_1 = array();
            foreach ($data->{'skillTags'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSkillTags($values_1);
        }
        if (property_exists($data, 'employment')) {
            $object->setEmployment($this->denormalizer->denormalize($data->{'employment'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitEmploymentModel', 'json', $context));
        }
        if (property_exists($data, 'availability')) {
            $object->setAvailability($this->denormalizer->denormalize($data->{'availability'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitCandidateAvailabilityModel', 'json', $context));
        }
        if (property_exists($data, 'education')) {
            $values_2 = array();
            foreach ($data->{'education'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\SubmitCandidateEducationModel', 'json', $context);
            }
            $object->setEducation($values_2);
        }
        if (property_exists($data, 'custom')) {
            $values_3 = array();
            foreach ($data->{'custom'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_3);
        }
        if (property_exists($data, 'recruiterUserId')) {
            $values_4 = array();
            foreach ($data->{'recruiterUserId'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setRecruiterUserId($values_4);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
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
        if (null !== $object->getSalutation()) {
            $data->{'salutation'} = $object->getSalutation();
        }
        if (null !== $object->getStatusId()) {
            $data->{'statusId'} = $object->getStatusId();
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
        if (null !== $object->getUnsubscribed()) {
            $data->{'unsubscribed'} = $object->getUnsubscribed();
        }
        if (null !== $object->getSummary()) {
            $data->{'summary'} = $object->getSummary();
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
        if (null !== $object->getSocial()) {
            $values = new \stdClass();
            foreach ($object->getSocial() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'social'} = $values;
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getSkillTags()) {
            $values_1 = array();
            foreach ($object->getSkillTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'skillTags'} = $values_1;
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
        if (null !== $object->getCustom()) {
            $values_3 = array();
            foreach ($object->getCustom() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'custom'} = $values_3;
        }
        if (null !== $object->getRecruiterUserId()) {
            $values_4 = array();
            foreach ($object->getRecruiterUserId() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'recruiterUserId'} = $values_4;
        }
        return $data;
    }
}