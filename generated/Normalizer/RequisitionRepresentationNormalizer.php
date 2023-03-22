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
class RequisitionRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\RequisitionRepresentation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\RequisitionRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\RequisitionRepresentation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('requisitionId', $data)) {
            $object->setRequisitionId($data['requisitionId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('workflowStageIndex', $data)) {
            $object->setWorkflowStageIndex($data['workflowStageIndex']);
        }
        if (\array_key_exists('jobTitle', $data)) {
            $object->setJobTitle($data['jobTitle']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context));
        }
        if (\array_key_exists('hiringManager', $data)) {
            $object->setHiringManager($this->denormalizer->denormalize($data['hiringManager'], 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['updatedAt']));
        }
        if (\array_key_exists('workflow', $data)) {
            $object->setWorkflow($this->denormalizer->denormalize($data['workflow'], 'Varspool\\JobAdder\\V2\\Model\\CompanyWorkflowModel', 'json', $context));
        }
        if (\array_key_exists('jobDescription', $data)) {
            $object->setJobDescription($data['jobDescription']);
        }
        if (\array_key_exists('numberOfJobs', $data)) {
            $object->setNumberOfJobs($data['numberOfJobs']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
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
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($this->denormalizer->denormalize($data['duration'], 'Varspool\\JobAdder\\V2\\Model\\DurationModel', 'json', $context));
        }
        if (\array_key_exists('workType', $data)) {
            $object->setWorkType($this->denormalizer->denormalize($data['workType'], 'Varspool\\JobAdder\\V2\\Model\\WorkTypeModel', 'json', $context));
        }
        if (\array_key_exists('salary', $data)) {
            $object->setSalary($this->denormalizer->denormalize($data['salary'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderSalaryRangeModel', 'json', $context));
        }
        if (\array_key_exists('custom', $data)) {
            $values = array();
            foreach ($data['custom'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('recruiters', $data)) {
            $values_1 = array();
            foreach ($data['recruiters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setRecruiters($values_1);
        }
        if (\array_key_exists('formID', $data)) {
            $object->setFormID($data['formID']);
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\RequisitionLinks', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['requisitionId'] = $object->getRequisitionId();
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('workflowStageIndex') && null !== $object->getWorkflowStageIndex()) {
            $data['workflowStageIndex'] = $object->getWorkflowStageIndex();
        }
        $data['jobTitle'] = $object->getJobTitle();
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if ($object->isInitialized('hiringManager') && null !== $object->getHiringManager()) {
            $data['hiringManager'] = $this->normalizer->normalize($object->getHiringManager(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('workflow') && null !== $object->getWorkflow()) {
            $data['workflow'] = $this->normalizer->normalize($object->getWorkflow(), 'json', $context);
        }
        if ($object->isInitialized('jobDescription') && null !== $object->getJobDescription()) {
            $data['jobDescription'] = $object->getJobDescription();
        }
        if ($object->isInitialized('numberOfJobs') && null !== $object->getNumberOfJobs()) {
            $data['numberOfJobs'] = $object->getNumberOfJobs();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
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
        if ($object->isInitialized('duration') && null !== $object->getDuration()) {
            $data['duration'] = $this->normalizer->normalize($object->getDuration(), 'json', $context);
        }
        if ($object->isInitialized('workType') && null !== $object->getWorkType()) {
            $data['workType'] = $this->normalizer->normalize($object->getWorkType(), 'json', $context);
        }
        if ($object->isInitialized('salary') && null !== $object->getSalary()) {
            $data['salary'] = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values = array();
            foreach ($object->getCustom() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['custom'] = $values;
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if ($object->isInitialized('recruiters') && null !== $object->getRecruiters()) {
            $values_1 = array();
            foreach ($object->getRecruiters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['recruiters'] = $values_1;
        }
        if ($object->isInitialized('formID') && null !== $object->getFormID()) {
            $data['formID'] = $object->getFormID();
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}