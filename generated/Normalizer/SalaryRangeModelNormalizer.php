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
class SalaryRangeModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\SalaryRangeModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\SalaryRangeModel';
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
        $object = new \Varspool\JobAdder\V2\Model\SalaryRangeModel();
        if (\array_key_exists('rateLow', $data) && \is_int($data['rateLow'])) {
            $data['rateLow'] = (double) $data['rateLow'];
        }
        if (\array_key_exists('rateHigh', $data) && \is_int($data['rateHigh'])) {
            $data['rateHigh'] = (double) $data['rateHigh'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ratePer', $data)) {
            $object->setRatePer($data['ratePer']);
        }
        if (\array_key_exists('rateLow', $data)) {
            $object->setRateLow($data['rateLow']);
        }
        if (\array_key_exists('rateHigh', $data)) {
            $object->setRateHigh($data['rateHigh']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('ratePer') && null !== $object->getRatePer()) {
            $data['ratePer'] = $object->getRatePer();
        }
        if ($object->isInitialized('rateLow') && null !== $object->getRateLow()) {
            $data['rateLow'] = $object->getRateLow();
        }
        if ($object->isInitialized('rateHigh') && null !== $object->getRateHigh()) {
            $data['rateHigh'] = $object->getRateHigh();
        }
        if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        return $data;
    }
}