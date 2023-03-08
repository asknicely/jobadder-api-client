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
class JobOrderRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderRepresentation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderRepresentation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('jobId', $data)) {
            $object->setJobId($data['jobId']);
        }
        if (\array_key_exists('jobTitle', $data)) {
            $object->setJobTitle($data['jobTitle']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context));
        }
        if (\array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('userFavourite', $data)) {
            $object->setUserFavourite($data['userFavourite']);
        }
        if (\array_key_exists('jobDescription', $data)) {
            $object->setJobDescription($data['jobDescription']);
        }
        if (\array_key_exists('numberOfJobs', $data)) {
            $object->setNumberOfJobs($data['numberOfJobs']);
        }
        if (\array_key_exists('workplaceAddress', $data)) {
            $object->setWorkplaceAddress($this->denormalizer->denormalize($data['workplaceAddress'], 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'json', $context));
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderCategoryModel', 'json', $context));
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderLocationModel', 'json', $context));
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart($this->denormalizer->denormalize($data['start'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderStartModel', 'json', $context));
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('workShift', $data)) {
            $object->setWorkShift($this->denormalizer->denormalize($data['workShift'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderWorkShiftModel', 'json', $context));
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($this->denormalizer->denormalize($data['duration'], 'Varspool\\JobAdder\\V2\\Model\\DurationModel', 'json', $context));
        }
        if (\array_key_exists('workType', $data)) {
            $object->setWorkType($this->denormalizer->denormalize($data['workType'], 'Varspool\\JobAdder\\V2\\Model\\WorkTypeModel', 'json', $context));
        }
        if (\array_key_exists('jobType', $data)) {
            $object->setJobType($data['jobType']);
        }
        if (\array_key_exists('salary', $data)) {
            $object->setSalary($this->denormalizer->denormalize($data['salary'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderSalaryRangeModel', 'json', $context));
        }
        if (\array_key_exists('fee', $data)) {
            $object->setFee($this->denormalizer->denormalize($data['fee'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderFeeModel', 'json', $context));
        }
        if (\array_key_exists('otherContacts', $data)) {
            $values = array();
            foreach ($data['otherContacts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context);
            }
            $object->setOtherContacts($values);
        }
        if (\array_key_exists('skillTags', $data)) {
            $object->setSkillTags($this->denormalizer->denormalize($data['skillTags'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderSkillTags', 'json', $context));
        }
        if (\array_key_exists('custom', $data)) {
            $values_1 = array();
            foreach ($data['custom'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_1);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('recruiters', $data)) {
            $values_2 = array();
            foreach ($data['recruiters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setRecruiters($values_2);
        }
        if (\array_key_exists('partnerActions', $data)) {
            $values_3 = array();
            foreach ($data['partnerActions'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel', 'json', $context);
            }
            $object->setPartnerActions($values_3);
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
        if (\array_key_exists('closedBy', $data)) {
            $object->setClosedBy($this->denormalizer->denormalize($data['closedBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('closedAt', $data)) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['closedAt']));
        }
        if (\array_key_exists('statistics', $data)) {
            $object->setStatistics($this->denormalizer->denormalize($data['statistics'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderStatisticsSummaryModel', 'json', $context));
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderLinks', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['jobId'] = $object->getJobId();
        if ($object->isInitialized('jobTitle') && null !== $object->getJobTitle()) {
            $data['jobTitle'] = $object->getJobTitle();
        }
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('userFavourite') && null !== $object->getUserFavourite()) {
            $data['userFavourite'] = $object->getUserFavourite();
        }
        if ($object->isInitialized('jobDescription') && null !== $object->getJobDescription()) {
            $data['jobDescription'] = $object->getJobDescription();
        }
        if ($object->isInitialized('numberOfJobs') && null !== $object->getNumberOfJobs()) {
            $data['numberOfJobs'] = $object->getNumberOfJobs();
        }
        if ($object->isInitialized('workplaceAddress') && null !== $object->getWorkplaceAddress()) {
            $data['workplaceAddress'] = $this->normalizer->normalize($object->getWorkplaceAddress(), 'json', $context);
        }
        if ($object->isInitialized('category') && null !== $object->getCategory()) {
            $data['category'] = $this->normalizer->normalize($object->getCategory(), 'json', $context);
        }
        if ($object->isInitialized('location') && null !== $object->getLocation()) {
            $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
        }
        if ($object->isInitialized('start') && null !== $object->getStart()) {
            $data['start'] = $this->normalizer->normalize($object->getStart(), 'json', $context);
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate()->format('Y-m-d');
        }
        if ($object->isInitialized('workShift') && null !== $object->getWorkShift()) {
            $data['workShift'] = $this->normalizer->normalize($object->getWorkShift(), 'json', $context);
        }
        if ($object->isInitialized('duration') && null !== $object->getDuration()) {
            $data['duration'] = $this->normalizer->normalize($object->getDuration(), 'json', $context);
        }
        if ($object->isInitialized('workType') && null !== $object->getWorkType()) {
            $data['workType'] = $this->normalizer->normalize($object->getWorkType(), 'json', $context);
        }
        if ($object->isInitialized('jobType') && null !== $object->getJobType()) {
            $data['jobType'] = $object->getJobType();
        }
        if ($object->isInitialized('salary') && null !== $object->getSalary()) {
            $data['salary'] = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if ($object->isInitialized('fee') && null !== $object->getFee()) {
            $data['fee'] = $this->normalizer->normalize($object->getFee(), 'json', $context);
        }
        if ($object->isInitialized('otherContacts') && null !== $object->getOtherContacts()) {
            $values = array();
            foreach ($object->getOtherContacts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['otherContacts'] = $values;
        }
        if ($object->isInitialized('skillTags') && null !== $object->getSkillTags()) {
            $data['skillTags'] = $this->normalizer->normalize($object->getSkillTags(), 'json', $context);
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values_1 = array();
            foreach ($object->getCustom() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom'] = $values_1;
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if ($object->isInitialized('recruiters') && null !== $object->getRecruiters()) {
            $values_2 = array();
            foreach ($object->getRecruiters() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['recruiters'] = $values_2;
        }
        if ($object->isInitialized('partnerActions') && null !== $object->getPartnerActions()) {
            $values_3 = array();
            foreach ($object->getPartnerActions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['partnerActions'] = $values_3;
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
        if ($object->isInitialized('closedBy') && null !== $object->getClosedBy()) {
            $data['closedBy'] = $this->normalizer->normalize($object->getClosedBy(), 'json', $context);
        }
        if ($object->isInitialized('closedAt') && null !== $object->getClosedAt()) {
            $data['closedAt'] = $object->getClosedAt()->format('Y-m-d\\TH:i:s');
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