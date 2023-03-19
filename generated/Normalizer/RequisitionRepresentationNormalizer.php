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
class RequisitionRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\RequisitionRepresentation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\RequisitionRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\RequisitionRepresentation();
        if (property_exists($data, 'requisitionId')) {
            $object->setRequisitionId($data->{'requisitionId'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'workflowStageIndex')) {
            $object->setWorkflowStageIndex($data->{'workflowStageIndex'});
        }
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->denormalizer->denormalize($data->{'company'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context));
        }
        if (property_exists($data, 'hiringManager')) {
            $object->setHiringManager($this->denormalizer->denormalize($data->{'hiringManager'}, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'updatedAt'}));
        }
        if (property_exists($data, 'workflow')) {
            $object->setWorkflow($this->denormalizer->denormalize($data->{'workflow'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyWorkflowModel', 'json', $context));
        }
        if (property_exists($data, 'jobDescription')) {
            $object->setJobDescription($data->{'jobDescription'});
        }
        if (property_exists($data, 'numberOfJobs')) {
            $object->setNumberOfJobs($data->{'numberOfJobs'});
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'workplaceAddress')) {
            $object->setWorkplaceAddress($this->denormalizer->denormalize($data->{'workplaceAddress'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'json', $context));
        }
        if (property_exists($data, 'category')) {
            $object->setCategory($this->denormalizer->denormalize($data->{'category'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderCategoryModel', 'json', $context));
        }
        if (property_exists($data, 'location')) {
            $object->setLocation($this->denormalizer->denormalize($data->{'location'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderLocationModel', 'json', $context));
        }
        if (property_exists($data, 'start')) {
            $object->setStart($this->denormalizer->denormalize($data->{'start'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderStartModel', 'json', $context));
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($this->denormalizer->denormalize($data->{'duration'}, 'Varspool\\JobAdder\\V2\\Model\\DurationModel', 'json', $context));
        }
        if (property_exists($data, 'workType')) {
            $object->setWorkType($this->denormalizer->denormalize($data->{'workType'}, 'Varspool\\JobAdder\\V2\\Model\\WorkTypeModel', 'json', $context));
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->denormalizer->denormalize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSalaryRangeModel', 'json', $context));
        }
        if (property_exists($data, 'custom')) {
            $values = array();
            foreach ($data->{'custom'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values);
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'recruiters')) {
            $values_1 = array();
            foreach ($data->{'recruiters'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setRecruiters($values_1);
        }
        if (property_exists($data, 'formID')) {
            $object->setFormID($data->{'formID'});
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\RequisitionLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getRequisitionId()) {
            $data->{'requisitionId'} = $object->getRequisitionId();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getWorkflowStageIndex()) {
            $data->{'workflowStageIndex'} = $object->getWorkflowStageIndex();
        }
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if (null !== $object->getHiringManager()) {
            $data->{'hiringManager'} = $this->normalizer->normalize($object->getHiringManager(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getWorkflow()) {
            $data->{'workflow'} = $this->normalizer->normalize($object->getWorkflow(), 'json', $context);
        }
        if (null !== $object->getJobDescription()) {
            $data->{'jobDescription'} = $object->getJobDescription();
        }
        if (null !== $object->getNumberOfJobs()) {
            $data->{'numberOfJobs'} = $object->getNumberOfJobs();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getWorkplaceAddress()) {
            $data->{'workplaceAddress'} = $this->normalizer->normalize($object->getWorkplaceAddress(), 'json', $context);
        }
        if (null !== $object->getCategory()) {
            $data->{'category'} = $this->normalizer->normalize($object->getCategory(), 'json', $context);
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $this->normalizer->normalize($object->getLocation(), 'json', $context);
        }
        if (null !== $object->getStart()) {
            $data->{'start'} = $this->normalizer->normalize($object->getStart(), 'json', $context);
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $this->normalizer->normalize($object->getDuration(), 'json', $context);
        }
        if (null !== $object->getWorkType()) {
            $data->{'workType'} = $this->normalizer->normalize($object->getWorkType(), 'json', $context);
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if (null !== $object->getCustom()) {
            $values = array();
            foreach ($object->getCustom() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'custom'} = $values;
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getRecruiters()) {
            $values_1 = array();
            foreach ($object->getRecruiters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'recruiters'} = $values_1;
        }
        if (null !== $object->getFormID()) {
            $data->{'formID'} = $object->getFormID();
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}