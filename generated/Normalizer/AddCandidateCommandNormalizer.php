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
class AddCandidateCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\AddCandidateCommand';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\AddCandidateCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\AddCandidateCommand();
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
        if (\array_key_exists('statusId', $data)) {
            $object->setStatusId($data['statusId']);
        }
        if (\array_key_exists('rating', $data)) {
            $object->setRating($data['rating']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('seeking', $data)) {
            $object->setSeeking($data['seeking']);
        }
        if (\array_key_exists('unsubscribed', $data)) {
            $object->setUnsubscribed($data['unsubscribed']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('dateOfBirth', $data)) {
            $object->setDateOfBirth(\DateTime::createFromFormat('Y-m-d', $data['dateOfBirth'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('emergencyContact', $data)) {
            $object->setEmergencyContact($data['emergencyContact']);
        }
        if (\array_key_exists('emergencyPhone', $data)) {
            $object->setEmergencyPhone($data['emergencyPhone']);
        }
        if (\array_key_exists('social', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['social'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSocial($values);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'Varspool\\JobAdder\\V2\\Model\\SubmitAddressModel', 'json', $context));
        }
        if (\array_key_exists('skillTags', $data)) {
            $values_1 = array();
            foreach ($data['skillTags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSkillTags($values_1);
        }
        if (\array_key_exists('employment', $data)) {
            $object->setEmployment($this->denormalizer->denormalize($data['employment'], 'Varspool\\JobAdder\\V2\\Model\\SubmitEmploymentModel', 'json', $context));
        }
        if (\array_key_exists('availability', $data)) {
            $object->setAvailability($this->denormalizer->denormalize($data['availability'], 'Varspool\\JobAdder\\V2\\Model\\SubmitCandidateAvailabilityModel', 'json', $context));
        }
        if (\array_key_exists('education', $data)) {
            $values_2 = array();
            foreach ($data['education'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\SubmitCandidateEducationModel', 'json', $context);
            }
            $object->setEducation($values_2);
        }
        if (\array_key_exists('custom', $data)) {
            $values_3 = array();
            foreach ($data['custom'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_3);
        }
        if (\array_key_exists('recruiterUserId', $data)) {
            $values_4 = array();
            foreach ($data['recruiterUserId'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setRecruiterUserId($values_4);
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
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['statusId'] = $object->getStatusId();
        }
        if ($object->isInitialized('rating') && null !== $object->getRating()) {
            $data['rating'] = $object->getRating();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('seeking') && null !== $object->getSeeking()) {
            $data['seeking'] = $object->getSeeking();
        }
        if ($object->isInitialized('unsubscribed') && null !== $object->getUnsubscribed()) {
            $data['unsubscribed'] = $object->getUnsubscribed();
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('dateOfBirth') && null !== $object->getDateOfBirth()) {
            $data['dateOfBirth'] = $object->getDateOfBirth()->format('Y-m-d');
        }
        if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
            $data['emergencyContact'] = $object->getEmergencyContact();
        }
        if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
            $data['emergencyPhone'] = $object->getEmergencyPhone();
        }
        if ($object->isInitialized('social') && null !== $object->getSocial()) {
            $values = array();
            foreach ($object->getSocial() as $key => $value) {
                $values[$key] = $value;
            }
            $data['social'] = $values;
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('skillTags') && null !== $object->getSkillTags()) {
            $values_1 = array();
            foreach ($object->getSkillTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['skillTags'] = $values_1;
        }
        if ($object->isInitialized('employment') && null !== $object->getEmployment()) {
            $data['employment'] = $this->normalizer->normalize($object->getEmployment(), 'json', $context);
        }
        if ($object->isInitialized('availability') && null !== $object->getAvailability()) {
            $data['availability'] = $this->normalizer->normalize($object->getAvailability(), 'json', $context);
        }
        if ($object->isInitialized('education') && null !== $object->getEducation()) {
            $values_2 = array();
            foreach ($object->getEducation() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['education'] = $values_2;
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values_3 = array();
            foreach ($object->getCustom() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['custom'] = $values_3;
        }
        if ($object->isInitialized('recruiterUserId') && null !== $object->getRecruiterUserId()) {
            $values_4 = array();
            foreach ($object->getRecruiterUserId() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['recruiterUserId'] = $values_4;
        }
        return $data;
    }
}