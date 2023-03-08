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
class UpdatePlacementCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\UpdatePlacementCommand';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\UpdatePlacementCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\UpdatePlacementCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('jobTitle', $data)) {
            $object->setJobTitle($data['jobTitle']);
        }
        if (\array_key_exists('contactId', $data)) {
            $object->setContactId($data['contactId']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('statusId', $data)) {
            $object->setStatusId($data['statusId']);
        }
        if (\array_key_exists('paymentType', $data)) {
            $object->setPaymentType($data['paymentType']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('salary', $data)) {
            $object->setSalary($this->denormalizer->denormalize($data['salary'], 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementSalaryModel', 'json', $context));
        }
        if (\array_key_exists('contractRate', $data)) {
            $object->setContractRate($this->denormalizer->denormalize($data['contractRate'], 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementContractRateModel', 'json', $context));
        }
        if (\array_key_exists('award', $data)) {
            $object->setAward($data['award']);
        }
        if (\array_key_exists('industryCode', $data)) {
            $object->setIndustryCode($data['industryCode']);
        }
        if (\array_key_exists('billing', $data)) {
            $object->setBilling($this->denormalizer->denormalize($data['billing'], 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementBillingModel', 'json', $context));
        }
        if (\array_key_exists('feeSplit', $data)) {
            $object->setFeeSplit($data['feeSplit']);
        }
        if (\array_key_exists('recruiters', $data)) {
            $values = array();
            foreach ($data['recruiters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementRecruiterModel', 'json', $context);
            }
            $object->setRecruiters($values);
        }
        if (\array_key_exists('custom', $data)) {
            $values_1 = array();
            foreach ($data['custom'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_1);
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
        if ($object->isInitialized('contactId') && null !== $object->getContactId()) {
            $data['contactId'] = $object->getContactId();
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['statusId'] = $object->getStatusId();
        }
        if ($object->isInitialized('paymentType') && null !== $object->getPaymentType()) {
            $data['paymentType'] = $object->getPaymentType();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate()->format('Y-m-d');
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate()->format('Y-m-d');
        }
        if ($object->isInitialized('salary') && null !== $object->getSalary()) {
            $data['salary'] = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if ($object->isInitialized('contractRate') && null !== $object->getContractRate()) {
            $data['contractRate'] = $this->normalizer->normalize($object->getContractRate(), 'json', $context);
        }
        if ($object->isInitialized('award') && null !== $object->getAward()) {
            $data['award'] = $object->getAward();
        }
        if ($object->isInitialized('industryCode') && null !== $object->getIndustryCode()) {
            $data['industryCode'] = $object->getIndustryCode();
        }
        if ($object->isInitialized('billing') && null !== $object->getBilling()) {
            $data['billing'] = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        if ($object->isInitialized('feeSplit') && null !== $object->getFeeSplit()) {
            $data['feeSplit'] = $object->getFeeSplit();
        }
        if ($object->isInitialized('recruiters') && null !== $object->getRecruiters()) {
            $values = array();
            foreach ($object->getRecruiters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['recruiters'] = $values;
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values_1 = array();
            foreach ($object->getCustom() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom'] = $values_1;
        }
        return $data;
    }
}