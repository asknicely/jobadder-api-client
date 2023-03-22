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
class SubmitJobOrderFeeModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderFeeModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\SubmitJobOrderFeeModel';
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
        $object = new \Varspool\JobAdder\V2\Model\SubmitJobOrderFeeModel();
        if (\array_key_exists('rate', $data) && \is_int($data['rate'])) {
            $data['rate'] = (double) $data['rate'];
        }
        if (\array_key_exists('estimatedTotal', $data) && \is_int($data['estimatedTotal'])) {
            $data['estimatedTotal'] = (double) $data['estimatedTotal'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('rateType', $data)) {
            $object->setRateType($data['rateType']);
        }
        if (\array_key_exists('rate', $data)) {
            $object->setRate($data['rate']);
        }
        if (\array_key_exists('estimatedTotal', $data)) {
            $object->setEstimatedTotal($data['estimatedTotal']);
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
        if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
            $data['rateType'] = $object->getRateType();
        }
        if ($object->isInitialized('rate') && null !== $object->getRate()) {
            $data['rate'] = $object->getRate();
        }
        if ($object->isInitialized('estimatedTotal') && null !== $object->getEstimatedTotal()) {
            $data['estimatedTotal'] = $object->getEstimatedTotal();
        }
        if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        return $data;
    }
}