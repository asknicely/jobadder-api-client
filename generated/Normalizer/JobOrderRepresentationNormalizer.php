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
class JobOrderRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderRepresentation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderRepresentation();
        if (property_exists($data, 'jobId')) {
            $object->setJobId($data->{'jobId'});
        }
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->denormalizer->denormalize($data->{'company'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context));
        }
        if (property_exists($data, 'contact')) {
            $object->setContact($this->denormalizer->denormalize($data->{'contact'}, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->denormalizer->denormalize($data->{'status'}, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'userFavourite')) {
            $object->setUserFavourite($data->{'userFavourite'});
        }
        if (property_exists($data, 'jobDescription')) {
            $object->setJobDescription($data->{'jobDescription'});
        }
        if (property_exists($data, 'numberOfJobs')) {
            $object->setNumberOfJobs($data->{'numberOfJobs'});
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
        if (property_exists($data, 'endDate')) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data->{'endDate'})->setTime(0, 0, 0));
        }
        if (property_exists($data, 'workShift')) {
            $object->setWorkShift($this->denormalizer->denormalize($data->{'workShift'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderWorkShiftModel', 'json', $context));
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($this->denormalizer->denormalize($data->{'duration'}, 'Varspool\\JobAdder\\V2\\Model\\DurationModel', 'json', $context));
        }
        if (property_exists($data, 'workType')) {
            $object->setWorkType($this->denormalizer->denormalize($data->{'workType'}, 'Varspool\\JobAdder\\V2\\Model\\WorkTypeModel', 'json', $context));
        }
        if (property_exists($data, 'jobType')) {
            $object->setJobType($data->{'jobType'});
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->denormalizer->denormalize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSalaryRangeModel', 'json', $context));
        }
        if (property_exists($data, 'fee')) {
            $object->setFee($this->denormalizer->denormalize($data->{'fee'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderFeeModel', 'json', $context));
        }
        if (property_exists($data, 'otherContacts')) {
            $values = array();
            foreach ($data->{'otherContacts'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context);
            }
            $object->setOtherContacts($values);
        }
        if (property_exists($data, 'skillTags')) {
            $object->setSkillTags($this->denormalizer->denormalize($data->{'skillTags'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderSkillTags', 'json', $context));
        }
        if (property_exists($data, 'custom')) {
            $values_1 = array();
            foreach ($data->{'custom'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_1);
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'recruiters')) {
            $values_2 = array();
            foreach ($data->{'recruiters'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setRecruiters($values_2);
        }
        if (property_exists($data, 'partnerActions')) {
            $values_3 = array();
            foreach ($data->{'partnerActions'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel', 'json', $context);
            }
            $object->setPartnerActions($values_3);
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
        if (property_exists($data, 'closedBy')) {
            $object->setClosedBy($this->denormalizer->denormalize($data->{'closedBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'closedAt')) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'closedAt'}));
        }
        if (property_exists($data, 'statistics')) {
            $object->setStatistics($this->denormalizer->denormalize($data->{'statistics'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderStatisticsSummaryModel', 'json', $context));
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getJobId()) {
            $data->{'jobId'} = $object->getJobId();
        }
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getUserFavourite()) {
            $data->{'userFavourite'} = $object->getUserFavourite();
        }
        if (null !== $object->getJobDescription()) {
            $data->{'jobDescription'} = $object->getJobDescription();
        }
        if (null !== $object->getNumberOfJobs()) {
            $data->{'numberOfJobs'} = $object->getNumberOfJobs();
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
        if (null !== $object->getEndDate()) {
            $data->{'endDate'} = $object->getEndDate()->format('Y-m-d');
        }
        if (null !== $object->getWorkShift()) {
            $data->{'workShift'} = $this->normalizer->normalize($object->getWorkShift(), 'json', $context);
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $this->normalizer->normalize($object->getDuration(), 'json', $context);
        }
        if (null !== $object->getWorkType()) {
            $data->{'workType'} = $this->normalizer->normalize($object->getWorkType(), 'json', $context);
        }
        if (null !== $object->getJobType()) {
            $data->{'jobType'} = $object->getJobType();
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if (null !== $object->getFee()) {
            $data->{'fee'} = $this->normalizer->normalize($object->getFee(), 'json', $context);
        }
        if (null !== $object->getOtherContacts()) {
            $values = array();
            foreach ($object->getOtherContacts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'otherContacts'} = $values;
        }
        if (null !== $object->getSkillTags()) {
            $data->{'skillTags'} = $this->normalizer->normalize($object->getSkillTags(), 'json', $context);
        }
        if (null !== $object->getCustom()) {
            $values_1 = array();
            foreach ($object->getCustom() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'custom'} = $values_1;
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getRecruiters()) {
            $values_2 = array();
            foreach ($object->getRecruiters() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'recruiters'} = $values_2;
        }
        if (null !== $object->getPartnerActions()) {
            $values_3 = array();
            foreach ($object->getPartnerActions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'partnerActions'} = $values_3;
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
        if (null !== $object->getClosedBy()) {
            $data->{'closedBy'} = $this->normalizer->normalize($object->getClosedBy(), 'json', $context);
        }
        if (null !== $object->getClosedAt()) {
            $data->{'closedAt'} = $object->getClosedAt()->format('Y-m-d\\TH:i:s');
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