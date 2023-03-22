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
class SetCandidateAvailabilityByWeekCommandAvailabilityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\SetCandidateAvailabilityByWeekCommandAvailability';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\SetCandidateAvailabilityByWeekCommandAvailability';
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
        $object = new \Varspool\JobAdder\V2\Model\SetCandidateAvailabilityByWeekCommandAvailability();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sunday', $data)) {
            $values = array();
            foreach ($data['sunday'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\TimeRangeModel', 'json', $context);
            }
            $object->setSunday($values);
        }
        if (\array_key_exists('monday', $data)) {
            $values_1 = array();
            foreach ($data['monday'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\TimeRangeModel', 'json', $context);
            }
            $object->setMonday($values_1);
        }
        if (\array_key_exists('tuesday', $data)) {
            $values_2 = array();
            foreach ($data['tuesday'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\TimeRangeModel', 'json', $context);
            }
            $object->setTuesday($values_2);
        }
        if (\array_key_exists('wednesday', $data)) {
            $values_3 = array();
            foreach ($data['wednesday'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\TimeRangeModel', 'json', $context);
            }
            $object->setWednesday($values_3);
        }
        if (\array_key_exists('thursday', $data)) {
            $values_4 = array();
            foreach ($data['thursday'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Varspool\\JobAdder\\V2\\Model\\TimeRangeModel', 'json', $context);
            }
            $object->setThursday($values_4);
        }
        if (\array_key_exists('friday', $data)) {
            $values_5 = array();
            foreach ($data['friday'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Varspool\\JobAdder\\V2\\Model\\TimeRangeModel', 'json', $context);
            }
            $object->setFriday($values_5);
        }
        if (\array_key_exists('saturday', $data)) {
            $values_6 = array();
            foreach ($data['saturday'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Varspool\\JobAdder\\V2\\Model\\TimeRangeModel', 'json', $context);
            }
            $object->setSaturday($values_6);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('sunday') && null !== $object->getSunday()) {
            $values = array();
            foreach ($object->getSunday() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sunday'] = $values;
        }
        if ($object->isInitialized('monday') && null !== $object->getMonday()) {
            $values_1 = array();
            foreach ($object->getMonday() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['monday'] = $values_1;
        }
        if ($object->isInitialized('tuesday') && null !== $object->getTuesday()) {
            $values_2 = array();
            foreach ($object->getTuesday() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['tuesday'] = $values_2;
        }
        if ($object->isInitialized('wednesday') && null !== $object->getWednesday()) {
            $values_3 = array();
            foreach ($object->getWednesday() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['wednesday'] = $values_3;
        }
        if ($object->isInitialized('thursday') && null !== $object->getThursday()) {
            $values_4 = array();
            foreach ($object->getThursday() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['thursday'] = $values_4;
        }
        if ($object->isInitialized('friday') && null !== $object->getFriday()) {
            $values_5 = array();
            foreach ($object->getFriday() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['friday'] = $values_5;
        }
        if ($object->isInitialized('saturday') && null !== $object->getSaturday()) {
            $values_6 = array();
            foreach ($object->getSaturday() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['saturday'] = $values_6;
        }
        return $data;
    }
}