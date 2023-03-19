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
class SubmitJobApplicationCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\SubmitJobApplicationCommand';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\SubmitJobApplicationCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\SubmitJobApplicationCommand();
        if (property_exists($data, 'firstName')) {
            $object->setFirstName($data->{'firstName'});
        }
        if (property_exists($data, 'lastName')) {
            $object->setLastName($data->{'lastName'});
        }
        if (property_exists($data, 'salutation')) {
            $object->setSalutation($data->{'salutation'});
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
        if (property_exists($data, 'address')) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitAddressModel', 'json', $context));
        }
        if (property_exists($data, 'social')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'social'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSocial($values);
        }
        if (property_exists($data, 'employment')) {
            $object->setEmployment($this->denormalizer->denormalize($data->{'employment'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitEmploymentModel', 'json', $context));
        }
        if (property_exists($data, 'availability')) {
            $object->setAvailability($this->denormalizer->denormalize($data->{'availability'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitCandidateAvailabilityModel', 'json', $context));
        }
        if (property_exists($data, 'education')) {
            $values_1 = array();
            foreach ($data->{'education'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\SubmitCandidateEducationModel', 'json', $context);
            }
            $object->setEducation($values_1);
        }
        if (property_exists($data, 'skillTags')) {
            $values_2 = array();
            foreach ($data->{'skillTags'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSkillTags($values_2);
        }
        if (property_exists($data, 'screening')) {
            $object->setScreening($this->denormalizer->denormalize($data->{'screening'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitScreeningQuesionResultsModel', 'json', $context));
        }
        if (property_exists($data, 'custom')) {
            $object->setCustom($this->denormalizer->denormalize($data->{'custom'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitJobApplicationCustomFieldsModel', 'json', $context));
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
        if (null !== $object->getSalutation()) {
            $data->{'salutation'} = $object->getSalutation();
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
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getSocial()) {
            $values = new \stdClass();
            foreach ($object->getSocial() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'social'} = $values;
        }
        if (null !== $object->getEmployment()) {
            $data->{'employment'} = $this->normalizer->normalize($object->getEmployment(), 'json', $context);
        }
        if (null !== $object->getAvailability()) {
            $data->{'availability'} = $this->normalizer->normalize($object->getAvailability(), 'json', $context);
        }
        if (null !== $object->getEducation()) {
            $values_1 = array();
            foreach ($object->getEducation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'education'} = $values_1;
        }
        if (null !== $object->getSkillTags()) {
            $values_2 = array();
            foreach ($object->getSkillTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'skillTags'} = $values_2;
        }
        if (null !== $object->getScreening()) {
            $data->{'screening'} = $this->normalizer->normalize($object->getScreening(), 'json', $context);
        }
        if (null !== $object->getCustom()) {
            $data->{'custom'} = $this->normalizer->normalize($object->getCustom(), 'json', $context);
        }
        return $data;
    }
}