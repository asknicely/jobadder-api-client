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
class JobOrderWorkShiftModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderWorkShiftModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderWorkShiftModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderWorkShiftModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('startTime', $data)) {
            $object->setStartTime($data['startTime']);
        }
        if (\array_key_exists('endTime', $data)) {
            $object->setEndTime($data['endTime']);
        }
        if (\array_key_exists('workDays', $data)) {
            $values = array();
            foreach ($data['workDays'] as $value) {
                $values[] = $value;
            }
            $object->setWorkDays($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('startTime') && null !== $object->getStartTime()) {
            $data['startTime'] = $object->getStartTime();
        }
        if ($object->isInitialized('endTime') && null !== $object->getEndTime()) {
            $data['endTime'] = $object->getEndTime();
        }
        if ($object->isInitialized('workDays') && null !== $object->getWorkDays()) {
            $values = array();
            foreach ($object->getWorkDays() as $value) {
                $values[] = $value;
            }
            $data['workDays'] = $values;
        }
        return $data;
    }
}