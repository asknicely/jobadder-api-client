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
class UpdatePlacementCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\UpdatePlacementCommand';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\UpdatePlacementCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\UpdatePlacementCommand();
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'contactId')) {
            $object->setContactId($data->{'contactId'});
        }
        if (property_exists($data, 'summary')) {
            $object->setSummary($data->{'summary'});
        }
        if (property_exists($data, 'statusId')) {
            $object->setStatusId($data->{'statusId'});
        }
        if (property_exists($data, 'paymentType')) {
            $object->setPaymentType($data->{'paymentType'});
        }
        if (property_exists($data, 'startDate')) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data->{'startDate'})->setTime(0, 0, 0));
        }
        if (property_exists($data, 'endDate')) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data->{'endDate'})->setTime(0, 0, 0));
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->denormalizer->denormalize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementSalaryModel', 'json', $context));
        }
        if (property_exists($data, 'contractRate')) {
            $object->setContractRate($this->denormalizer->denormalize($data->{'contractRate'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementContractRateModel', 'json', $context));
        }
        if (property_exists($data, 'award')) {
            $object->setAward($data->{'award'});
        }
        if (property_exists($data, 'industryCode')) {
            $object->setIndustryCode($data->{'industryCode'});
        }
        if (property_exists($data, 'billing')) {
            $object->setBilling($this->denormalizer->denormalize($data->{'billing'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementBillingModel', 'json', $context));
        }
        if (property_exists($data, 'feeSplit')) {
            $object->setFeeSplit($data->{'feeSplit'});
        }
        if (property_exists($data, 'recruiters')) {
            $values = array();
            foreach ($data->{'recruiters'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementRecruiterModel', 'json', $context);
            }
            $object->setRecruiters($values);
        }
        if (property_exists($data, 'custom')) {
            $values_1 = array();
            foreach ($data->{'custom'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getContactId()) {
            $data->{'contactId'} = $object->getContactId();
        }
        if (null !== $object->getSummary()) {
            $data->{'summary'} = $object->getSummary();
        }
        if (null !== $object->getStatusId()) {
            $data->{'statusId'} = $object->getStatusId();
        }
        if (null !== $object->getPaymentType()) {
            $data->{'paymentType'} = $object->getPaymentType();
        }
        if (null !== $object->getStartDate()) {
            $data->{'startDate'} = $object->getStartDate()->format('Y-m-d');
        }
        if (null !== $object->getEndDate()) {
            $data->{'endDate'} = $object->getEndDate()->format('Y-m-d');
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if (null !== $object->getContractRate()) {
            $data->{'contractRate'} = $this->normalizer->normalize($object->getContractRate(), 'json', $context);
        }
        if (null !== $object->getAward()) {
            $data->{'award'} = $object->getAward();
        }
        if (null !== $object->getIndustryCode()) {
            $data->{'industryCode'} = $object->getIndustryCode();
        }
        if (null !== $object->getBilling()) {
            $data->{'billing'} = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        if (null !== $object->getFeeSplit()) {
            $data->{'feeSplit'} = $object->getFeeSplit();
        }
        if (null !== $object->getRecruiters()) {
            $values = array();
            foreach ($object->getRecruiters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'recruiters'} = $values;
        }
        if (null !== $object->getCustom()) {
            $values_1 = array();
            foreach ($object->getCustom() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'custom'} = $values_1;
        }
        return $data;
    }
}