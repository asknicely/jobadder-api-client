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
class PlacementRateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementRateModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementRateModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementRateModel();
        if (\array_key_exists('payRate', $data) && \is_int($data['payRate'])) {
            $data['payRate'] = (double) $data['payRate'];
        }
        if (\array_key_exists('chargeRate', $data) && \is_int($data['chargeRate'])) {
            $data['chargeRate'] = (double) $data['chargeRate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('default', $data)) {
            $object->setDefault($data['default']);
        }
        if (\array_key_exists('displayIndex', $data)) {
            $object->setDisplayIndex($data['displayIndex']);
        }
        if (\array_key_exists('payRate', $data)) {
            $object->setPayRate($data['payRate']);
        }
        if (\array_key_exists('chargeRate', $data)) {
            $object->setChargeRate($data['chargeRate']);
        }
        if (\array_key_exists('chargeCurrency', $data)) {
            $object->setChargeCurrency($data['chargeCurrency']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('default') && null !== $object->getDefault()) {
            $data['default'] = $object->getDefault();
        }
        if ($object->isInitialized('displayIndex') && null !== $object->getDisplayIndex()) {
            $data['displayIndex'] = $object->getDisplayIndex();
        }
        if ($object->isInitialized('payRate') && null !== $object->getPayRate()) {
            $data['payRate'] = $object->getPayRate();
        }
        if ($object->isInitialized('chargeRate') && null !== $object->getChargeRate()) {
            $data['chargeRate'] = $object->getChargeRate();
        }
        if ($object->isInitialized('chargeCurrency') && null !== $object->getChargeCurrency()) {
            $data['chargeCurrency'] = $object->getChargeCurrency();
        }
        return $data;
    }
}