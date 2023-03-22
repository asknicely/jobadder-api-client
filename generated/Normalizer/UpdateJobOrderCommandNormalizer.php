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
class UpdateJobOrderCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\UpdateJobOrderCommand';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\UpdateJobOrderCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\UpdateJobOrderCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('jobTitle', $data)) {
            $object->setJobTitle($data['jobTitle']);
        }
        if (\array_key_exists('companyId', $data)) {
            $object->setCompanyId($data['companyId']);
        }
        if (\array_key_exists('contactId', $data)) {
            $object->setContactId($data['contactId']);
        }
        if (\array_key_exists('jobDescription', $data)) {
            $object->setJobDescription($data['jobDescription']);
        }
        if (\array_key_exists('statusId', $data)) {
            $object->setStatusId($data['statusId']);
        }
        if (\array_key_exists('userFavourite', $data)) {
            $object->setUserFavourite($data['userFavourite']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], 'Varspool\\JobAdder\\V2\\Model\\SubmitCategoryModel', 'json', $context));
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], 'Varspool\\JobAdder\\V2\\Model\\SubmitLocationModel', 'json', $context));
        }
        if (\array_key_exists('workplaceAddressId', $data)) {
            $object->setWorkplaceAddressId($data['workplaceAddressId']);
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart($this->denormalizer->denormalize($data['start'], 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderStartModel', 'json', $context));
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($this->denormalizer->denormalize($data['duration'], 'Varspool\\JobAdder\\V2\\Model\\SubmitDurationModel', 'json', $context));
        }
        if (\array_key_exists('workTypeId', $data)) {
            $object->setWorkTypeId($data['workTypeId']);
        }
        if (\array_key_exists('salary', $data)) {
            $object->setSalary($this->denormalizer->denormalize($data['salary'], 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderSalaryRangeModel', 'json', $context));
        }
        if (\array_key_exists('fee', $data)) {
            $object->setFee($this->denormalizer->denormalize($data['fee'], 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderFeeModel', 'json', $context));
        }
        if (\array_key_exists('numberOfJobs', $data)) {
            $object->setNumberOfJobs($data['numberOfJobs']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('custom', $data)) {
            $values = array();
            foreach ($data['custom'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values);
        }
        if (\array_key_exists('skillTags', $data)) {
            $object->setSkillTags($this->denormalizer->denormalize($data['skillTags'], 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderSkillTagsModel', 'json', $context));
        }
        if (\array_key_exists('ownerUserId', $data)) {
            $object->setOwnerUserId($data['ownerUserId']);
        }
        if (\array_key_exists('recruiterUserId', $data)) {
            $values_1 = array();
            foreach ($data['recruiterUserId'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRecruiterUserId($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['jobTitle'] = $object->getJobTitle();
        if ($object->isInitialized('companyId') && null !== $object->getCompanyId()) {
            $data['companyId'] = $object->getCompanyId();
        }
        if ($object->isInitialized('contactId') && null !== $object->getContactId()) {
            $data['contactId'] = $object->getContactId();
        }
        if ($object->isInitialized('jobDescription') && null !== $object->getJobDescription()) {
            $data['jobDescription'] = $object->getJobDescription();
        }
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['statusId'] = $object->getStatusId();
        }
        if ($object->isInitialized('userFavourite') && null !== $object->getUserFavourite()) {
            $data['userFavourite'] = $object->getUserFavourite();
        }
        if ($object->isInitialized('category') && null !== $object->getCategory()) {
            $data['category'] = $this->normalizer->normalize($object->getCategory(), 'json', $context);
        }
        if ($object->isInitialized('location') && null !== $object->getLocation()) {
            $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
        }
        if ($object->isInitialized('workplaceAddressId') && null !== $object->getWorkplaceAddressId()) {
            $data['workplaceAddressId'] = $object->getWorkplaceAddressId();
        }
        if ($object->isInitialized('start') && null !== $object->getStart()) {
            $data['start'] = $this->normalizer->normalize($object->getStart(), 'json', $context);
        }
        if ($object->isInitialized('duration') && null !== $object->getDuration()) {
            $data['duration'] = $this->normalizer->normalize($object->getDuration(), 'json', $context);
        }
        if ($object->isInitialized('workTypeId') && null !== $object->getWorkTypeId()) {
            $data['workTypeId'] = $object->getWorkTypeId();
        }
        if ($object->isInitialized('salary') && null !== $object->getSalary()) {
            $data['salary'] = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if ($object->isInitialized('fee') && null !== $object->getFee()) {
            $data['fee'] = $this->normalizer->normalize($object->getFee(), 'json', $context);
        }
        if ($object->isInitialized('numberOfJobs') && null !== $object->getNumberOfJobs()) {
            $data['numberOfJobs'] = $object->getNumberOfJobs();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values = array();
            foreach ($object->getCustom() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['custom'] = $values;
        }
        if ($object->isInitialized('skillTags') && null !== $object->getSkillTags()) {
            $data['skillTags'] = $this->normalizer->normalize($object->getSkillTags(), 'json', $context);
        }
        if ($object->isInitialized('ownerUserId') && null !== $object->getOwnerUserId()) {
            $data['ownerUserId'] = $object->getOwnerUserId();
        }
        if ($object->isInitialized('recruiterUserId') && null !== $object->getRecruiterUserId()) {
            $values_1 = array();
            foreach ($object->getRecruiterUserId() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['recruiterUserId'] = $values_1;
        }
        return $data;
    }
}