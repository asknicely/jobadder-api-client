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
class SubmitJobOrderCandidateCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderCandidateCommand';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderCandidateCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\SubmitJobOrderCandidateCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('salutation', $data)) {
            $object->setSalutation($data['salutation']);
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
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'Varspool\\JobAdder\\V2\\Model\\SubmitAddressModel', 'json', $context));
        }
        if (\array_key_exists('social', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['social'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSocial($values);
        }
        if (\array_key_exists('employment', $data)) {
            $object->setEmployment($this->denormalizer->denormalize($data['employment'], 'Varspool\\JobAdder\\V2\\Model\\SubmitEmploymentModel', 'json', $context));
        }
        if (\array_key_exists('availability', $data)) {
            $object->setAvailability($this->denormalizer->denormalize($data['availability'], 'Varspool\\JobAdder\\V2\\Model\\SubmitCandidateAvailabilityModel', 'json', $context));
        }
        if (\array_key_exists('education', $data)) {
            $values_1 = array();
            foreach ($data['education'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\SubmitCandidateEducationModel', 'json', $context);
            }
            $object->setEducation($values_1);
        }
        if (\array_key_exists('skillTags', $data)) {
            $values_2 = array();
            foreach ($data['skillTags'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSkillTags($values_2);
        }
        if (\array_key_exists('screening', $data)) {
            $object->setScreening($this->denormalizer->denormalize($data['screening'], 'Varspool\\JobAdder\\V2\\Model\\SubmitScreeningQuesionResultsModel', 'json', $context));
        }
        if (\array_key_exists('custom', $data)) {
            $object->setCustom($this->denormalizer->denormalize($data['custom'], 'Varspool\\JobAdder\\V2\\Model\\SubmitJobApplicationCustomFieldsModel', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        $data['firstName'] = $object->getFirstName();
        $data['lastName'] = $object->getLastName();
        if ($object->isInitialized('salutation') && null !== $object->getSalutation()) {
            $data['salutation'] = $object->getSalutation();
        }
        $data['email'] = $object->getEmail();
        if ($object->isInitialized('phone') && null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if ($object->isInitialized('mobile') && null !== $object->getMobile()) {
            $data['mobile'] = $object->getMobile();
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('social') && null !== $object->getSocial()) {
            $values = array();
            foreach ($object->getSocial() as $key => $value) {
                $values[$key] = $value;
            }
            $data['social'] = $values;
        }
        if ($object->isInitialized('employment') && null !== $object->getEmployment()) {
            $data['employment'] = $this->normalizer->normalize($object->getEmployment(), 'json', $context);
        }
        if ($object->isInitialized('availability') && null !== $object->getAvailability()) {
            $data['availability'] = $this->normalizer->normalize($object->getAvailability(), 'json', $context);
        }
        if ($object->isInitialized('education') && null !== $object->getEducation()) {
            $values_1 = array();
            foreach ($object->getEducation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['education'] = $values_1;
        }
        if ($object->isInitialized('skillTags') && null !== $object->getSkillTags()) {
            $values_2 = array();
            foreach ($object->getSkillTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['skillTags'] = $values_2;
        }
        if ($object->isInitialized('screening') && null !== $object->getScreening()) {
            $data['screening'] = $this->normalizer->normalize($object->getScreening(), 'json', $context);
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $data['custom'] = $this->normalizer->normalize($object->getCustom(), 'json', $context);
        }
        return $data;
    }
}