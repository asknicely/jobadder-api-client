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
class JobOrderRetainedModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderRetainedModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderRetainedModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderRetainedModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('jobId', $data)) {
            $object->setJobId($data['jobId']);
        }
        if (\array_key_exists('jobType', $data)) {
            $object->setJobType($data['jobType']);
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
        if (\array_key_exists('feeCurrencyCode', $data)) {
            $object->setFeeCurrencyCode($data['feeCurrencyCode']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
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
        if ($object->isInitialized('jobType') && null !== $object->getJobType()) {
            $data['jobType'] = $object->getJobType();
        }
        if ($object->isInitialized('jobTitle') && null !== $object->getJobTitle()) {
            $data['jobTitle'] = $object->getJobTitle();
        }
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if ($object->isInitialized('feeCurrencyCode') && null !== $object->getFeeCurrencyCode()) {
            $data['feeCurrencyCode'] = $object->getFeeCurrencyCode();
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        return $data;
    }
}