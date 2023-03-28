<?php

namespace AskNicely\JobAdder\Generated\Normalizer;

use AskNicely\JobAdder\Generated\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class JobOrderRepresentationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'AskNicely\\JobAdder\\Generated\\Model\\JobOrderRepresentation') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \AskNicely\JobAdder\Generated\Model\JobOrderRepresentation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \AskNicely\JobAdder\Generated\Model\JobOrderRepresentation();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'jobId')) {
            $object->setJobId($data->{'jobId'});
        }
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->serializer->deserialize($data->{'company'}, 'AskNicely\\JobAdder\\Generated\\Model\\CompanyNameModel', 'raw', $context));
        }
        if (property_exists($data, 'contact')) {
            $object->setContact($this->serializer->deserialize($data->{'contact'}, 'AskNicely\\JobAdder\\Generated\\Model\\ContactNameModel', 'raw', $context));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->serializer->deserialize($data->{'status'}, 'AskNicely\\JobAdder\\Generated\\Model\\StatusModel', 'raw', $context));
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($this->serializer->deserialize($data->{'createdBy'}, 'AskNicely\\JobAdder\\Generated\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedBy')) {
            $object->setUpdatedBy($this->serializer->deserialize($data->{'updatedBy'}, 'AskNicely\\JobAdder\\Generated\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updatedAt'}));
        }
        if (property_exists($data, 'jobDescription')) {
            $object->setJobDescription($data->{'jobDescription'});
        }
        if (property_exists($data, 'numberOfJobs')) {
            $object->setNumberOfJobs($data->{'numberOfJobs'});
        }
        if (property_exists($data, 'workplaceAddress')) {
            $object->setWorkplaceAddress($this->serializer->deserialize($data->{'workplaceAddress'}, 'AskNicely\\JobAdder\\Generated\\Model\\CompanyAddressModel', 'raw', $context));
        }
        if (property_exists($data, 'category')) {
            $object->setCategory($this->serializer->deserialize($data->{'category'}, 'AskNicely\\JobAdder\\Generated\\Model\\JobOrderCategoryModel', 'raw', $context));
        }
        if (property_exists($data, 'location')) {
            $object->setLocation($this->serializer->deserialize($data->{'location'}, 'AskNicely\\JobAdder\\Generated\\Model\\JobOrderLocationModel', 'raw', $context));
        }
        if (property_exists($data, 'start')) {
            $object->setStart($this->serializer->deserialize($data->{'start'}, 'AskNicely\\JobAdder\\Generated\\Model\\StartModel', 'raw', $context));
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($this->serializer->deserialize($data->{'duration'}, 'AskNicely\\JobAdder\\Generated\\Model\\DurationModel', 'raw', $context));
        }
        if (property_exists($data, 'workType')) {
            $object->setWorkType($this->serializer->deserialize($data->{'workType'}, 'AskNicely\\JobAdder\\Generated\\Model\\WorkTypeModel', 'raw', $context));
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->serializer->deserialize($data->{'salary'}, 'AskNicely\\JobAdder\\Generated\\Model\\JobOrderSalaryRangeModel', 'raw', $context));
        }
        if (property_exists($data, 'fee')) {
            $object->setFee($this->serializer->deserialize($data->{'fee'}, 'AskNicely\\JobAdder\\Generated\\Model\\JobOrderFeeModel', 'raw', $context));
        }
        if (property_exists($data, 'custom')) {
            $values = [];
            foreach ($data->{'custom'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'AskNicely\\JobAdder\\Generated\\Model\\CustomFieldValueModel', 'raw', $context);
            }
            $object->setCustom($values);
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->serializer->deserialize($data->{'owner'}, 'AskNicely\\JobAdder\\Generated\\Model\\UserSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'recruiters')) {
            $values_1 = [];
            foreach ($data->{'recruiters'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'AskNicely\\JobAdder\\Generated\\Model\\UserSummaryModel', 'raw', $context);
            }
            $object->setRecruiters($values_1);
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->serializer->deserialize($data->{'links'}, 'AskNicely\\JobAdder\\Generated\\Model\\JobOrderLinks', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getJobId()) {
            $data->{'jobId'} = $object->getJobId();
        }
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->serializer->serialize($object->getCompany(), 'raw', $context);
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->serializer->serialize($object->getContact(), 'raw', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->serializer->serialize($object->getStatus(), 'raw', $context);
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $this->serializer->serialize($object->getCreatedBy(), 'raw', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getUpdatedBy()) {
            $data->{'updatedBy'} = $this->serializer->serialize($object->getUpdatedBy(), 'raw', $context);
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getJobDescription()) {
            $data->{'jobDescription'} = $object->getJobDescription();
        }
        if (null !== $object->getNumberOfJobs()) {
            $data->{'numberOfJobs'} = $object->getNumberOfJobs();
        }
        if (null !== $object->getWorkplaceAddress()) {
            $data->{'workplaceAddress'} = $this->serializer->serialize($object->getWorkplaceAddress(), 'raw', $context);
        }
        if (null !== $object->getCategory()) {
            $data->{'category'} = $this->serializer->serialize($object->getCategory(), 'raw', $context);
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $this->serializer->serialize($object->getLocation(), 'raw', $context);
        }
        if (null !== $object->getStart()) {
            $data->{'start'} = $this->serializer->serialize($object->getStart(), 'raw', $context);
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $this->serializer->serialize($object->getDuration(), 'raw', $context);
        }
        if (null !== $object->getWorkType()) {
            $data->{'workType'} = $this->serializer->serialize($object->getWorkType(), 'raw', $context);
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->serializer->serialize($object->getSalary(), 'raw', $context);
        }
        if (null !== $object->getFee()) {
            $data->{'fee'} = $this->serializer->serialize($object->getFee(), 'raw', $context);
        }
        if (null !== $object->getCustom()) {
            $values = [];
            foreach ($object->getCustom() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'custom'} = $values;
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->serializer->serialize($object->getOwner(), 'raw', $context);
        }
        if (null !== $object->getRecruiters()) {
            $values_1 = [];
            foreach ($object->getRecruiters() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'recruiters'} = $values_1;
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->serializer->serialize($object->getLinks(), 'raw', $context);
        }

        return $data;
    }
}
