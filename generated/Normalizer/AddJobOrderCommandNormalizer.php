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
class AddJobOrderCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\AddJobOrderCommand';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\AddJobOrderCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\AddJobOrderCommand();
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'companyId')) {
            $object->setCompanyId($data->{'companyId'});
        }
        if (property_exists($data, 'contactId')) {
            $object->setContactId($data->{'contactId'});
        }
        if (property_exists($data, 'jobDescription')) {
            $object->setJobDescription($data->{'jobDescription'});
        }
        if (property_exists($data, 'statusId')) {
            $object->setStatusId($data->{'statusId'});
        }
        if (property_exists($data, 'userFavourite')) {
            $object->setUserFavourite($data->{'userFavourite'});
        }
        if (property_exists($data, 'category')) {
            $object->setCategory($this->denormalizer->denormalize($data->{'category'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitCategoryModel', 'json', $context));
        }
        if (property_exists($data, 'location')) {
            $object->setLocation($this->denormalizer->denormalize($data->{'location'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitLocationModel', 'json', $context));
        }
        if (property_exists($data, 'workplaceAddressId')) {
            $object->setWorkplaceAddressId($data->{'workplaceAddressId'});
        }
        if (property_exists($data, 'start')) {
            $object->setStart($this->denormalizer->denormalize($data->{'start'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderStartModel', 'json', $context));
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($this->denormalizer->denormalize($data->{'duration'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitDurationModel', 'json', $context));
        }
        if (property_exists($data, 'workTypeId')) {
            $object->setWorkTypeId($data->{'workTypeId'});
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->denormalizer->denormalize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderSalaryRangeModel', 'json', $context));
        }
        if (property_exists($data, 'fee')) {
            $object->setFee($this->denormalizer->denormalize($data->{'fee'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderFeeModel', 'json', $context));
        }
        if (property_exists($data, 'numberOfJobs')) {
            $object->setNumberOfJobs($data->{'numberOfJobs'});
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'custom')) {
            $values = array();
            foreach ($data->{'custom'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values);
        }
        if (property_exists($data, 'skillTags')) {
            $object->setSkillTags($this->denormalizer->denormalize($data->{'skillTags'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderSkillTagsModel', 'json', $context));
        }
        if (property_exists($data, 'ownerUserId')) {
            $object->setOwnerUserId($data->{'ownerUserId'});
        }
        if (property_exists($data, 'recruiterUserId')) {
            $values_1 = array();
            foreach ($data->{'recruiterUserId'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRecruiterUserId($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getCompanyId()) {
            $data->{'companyId'} = $object->getCompanyId();
        }
        if (null !== $object->getContactId()) {
            $data->{'contactId'} = $object->getContactId();
        }
        if (null !== $object->getJobDescription()) {
            $data->{'jobDescription'} = $object->getJobDescription();
        }
        if (null !== $object->getStatusId()) {
            $data->{'statusId'} = $object->getStatusId();
        }
        if (null !== $object->getUserFavourite()) {
            $data->{'userFavourite'} = $object->getUserFavourite();
        }
        if (null !== $object->getCategory()) {
            $data->{'category'} = $this->normalizer->normalize($object->getCategory(), 'json', $context);
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $this->normalizer->normalize($object->getLocation(), 'json', $context);
        }
        if (null !== $object->getWorkplaceAddressId()) {
            $data->{'workplaceAddressId'} = $object->getWorkplaceAddressId();
        }
        if (null !== $object->getStart()) {
            $data->{'start'} = $this->normalizer->normalize($object->getStart(), 'json', $context);
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $this->normalizer->normalize($object->getDuration(), 'json', $context);
        }
        if (null !== $object->getWorkTypeId()) {
            $data->{'workTypeId'} = $object->getWorkTypeId();
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if (null !== $object->getFee()) {
            $data->{'fee'} = $this->normalizer->normalize($object->getFee(), 'json', $context);
        }
        if (null !== $object->getNumberOfJobs()) {
            $data->{'numberOfJobs'} = $object->getNumberOfJobs();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getCustom()) {
            $values = array();
            foreach ($object->getCustom() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'custom'} = $values;
        }
        if (null !== $object->getSkillTags()) {
            $data->{'skillTags'} = $this->normalizer->normalize($object->getSkillTags(), 'json', $context);
        }
        if (null !== $object->getOwnerUserId()) {
            $data->{'ownerUserId'} = $object->getOwnerUserId();
        }
        if (null !== $object->getRecruiterUserId()) {
            $values_1 = array();
            foreach ($object->getRecruiterUserId() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'recruiterUserId'} = $values_1;
        }
        return $data;
    }
}