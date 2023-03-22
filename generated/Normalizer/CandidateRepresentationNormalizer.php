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
class CandidateRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidateRepresentation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidateRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidateRepresentation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('candidateId', $data)) {
            $object->setCandidateId($data['candidateId']);
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
        if (\array_key_exists('contactMethod', $data)) {
            $object->setContactMethod($data['contactMethod']);
        }
        if (\array_key_exists('salutation', $data)) {
            $object->setSalutation($data['salutation']);
        }
        if (\array_key_exists('unsubscribed', $data)) {
            $object->setUnsubscribed($data['unsubscribed']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'Varspool\\JobAdder\\V2\\Model\\AddressModel', 'json', $context));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
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
        if (\array_key_exists('dateOfBirth', $data)) {
            $object->setDateOfBirth(\DateTime::createFromFormat('Y-m-d', $data['dateOfBirth'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('emergencyContact', $data)) {
            $object->setEmergencyContact($data['emergencyContact']);
        }
        if (\array_key_exists('emergencyPhone', $data)) {
            $object->setEmergencyPhone($data['emergencyPhone']);
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
        if (\array_key_exists('employment', $data)) {
            $object->setEmployment($this->denormalizer->denormalize($data['employment'], 'Varspool\\JobAdder\\V2\\Model\\CandidateEmploymentModel', 'json', $context));
        }
        if (\array_key_exists('availability', $data)) {
            $object->setAvailability($this->denormalizer->denormalize($data['availability'], 'Varspool\\JobAdder\\V2\\Model\\CandidateStartModel', 'json', $context));
        }
        if (\array_key_exists('education', $data)) {
            $values_2 = array();
            foreach ($data['education'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\CandidateEducationModel', 'json', $context);
            }
            $object->setEducation($values_2);
        }
        if (\array_key_exists('skillTags', $data)) {
            $values_3 = array();
            foreach ($data['skillTags'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setSkillTags($values_3);
        }
        if (\array_key_exists('custom', $data)) {
            $values_4 = array();
            foreach ($data['custom'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_4);
        }
        if (\array_key_exists('recruiters', $data)) {
            $values_5 = array();
            foreach ($data['recruiters'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setRecruiters($values_5);
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
        if (\array_key_exists('partnerActions', $data)) {
            $values_6 = array();
            foreach ($data['partnerActions'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel', 'json', $context);
            }
            $object->setPartnerActions($values_6);
        }
        if (\array_key_exists('statistics', $data)) {
            $object->setStatistics($this->denormalizer->denormalize($data['statistics'], 'Varspool\\JobAdder\\V2\\Model\\CandidateStatisticsModel', 'json', $context));
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\CandidateLinks', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['candidateId'] = $object->getCandidateId();
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
        if ($object->isInitialized('contactMethod') && null !== $object->getContactMethod()) {
            $data['contactMethod'] = $object->getContactMethod();
        }
        if ($object->isInitialized('salutation') && null !== $object->getSalutation()) {
            $data['salutation'] = $object->getSalutation();
        }
        if ($object->isInitialized('unsubscribed') && null !== $object->getUnsubscribed()) {
            $data['unsubscribed'] = $object->getUnsubscribed();
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
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
        if ($object->isInitialized('dateOfBirth') && null !== $object->getDateOfBirth()) {
            $data['dateOfBirth'] = $object->getDateOfBirth()->format('Y-m-d');
        }
        if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
            $data['emergencyContact'] = $object->getEmergencyContact();
        }
        if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
            $data['emergencyPhone'] = $object->getEmergencyPhone();
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
        if ($object->isInitialized('skillTags') && null !== $object->getSkillTags()) {
            $values_3 = array();
            foreach ($object->getSkillTags() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['skillTags'] = $values_3;
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values_4 = array();
            foreach ($object->getCustom() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['custom'] = $values_4;
        }
        if ($object->isInitialized('recruiters') && null !== $object->getRecruiters()) {
            $values_5 = array();
            foreach ($object->getRecruiters() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['recruiters'] = $values_5;
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
        if ($object->isInitialized('partnerActions') && null !== $object->getPartnerActions()) {
            $values_6 = array();
            foreach ($object->getPartnerActions() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['partnerActions'] = $values_6;
        }
        if ($object->isInitialized('statistics') && null !== $object->getStatistics()) {
            $data['statistics'] = $this->normalizer->normalize($object->getStatistics(), 'json', $context);
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}