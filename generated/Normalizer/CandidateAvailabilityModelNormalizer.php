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
class CandidateAvailabilityModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidateAvailabilityModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidateAvailabilityModel';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidateAvailabilityModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('day', $data)) {
            $object->setDay($data['day']);
        }
        if (\array_key_exists('shifts', $data)) {
            $values = array();
            foreach ($data['shifts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\TimeRangeModel', 'json', $context);
            }
            $object->setShifts($values);
        }
        if (\array_key_exists('recurring', $data)) {
            $object->setRecurring($data['recurring']);
        }
        if (\array_key_exists('until', $data)) {
            $object->setUntil(\DateTime::createFromFormat('Y-m-d', $data['until'])->setTime(0, 0, 0));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d');
        }
        if ($object->isInitialized('day') && null !== $object->getDay()) {
            $data['day'] = $object->getDay();
        }
        if ($object->isInitialized('recurring') && null !== $object->getRecurring()) {
            $data['recurring'] = $object->getRecurring();
        }
        if ($object->isInitialized('until') && null !== $object->getUntil()) {
            $data['until'] = $object->getUntil()->format('Y-m-d');
        }
        return $data;
    }
}