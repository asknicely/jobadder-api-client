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
class LocationModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\LocationModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\LocationModel';
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
        $object = new \Varspool\JobAdder\V2\Model\LocationModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('locationId', $data)) {
            $object->setLocationId($data['locationId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('areas', $data)) {
            $values = array();
            foreach ($data['areas'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\LocationAreaModel', 'json', $context);
            }
            $object->setAreas($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['locationId'] = $object->getLocationId();
        $data['name'] = $object->getName();
        if ($object->isInitialized('areas') && null !== $object->getAreas()) {
            $values = array();
            foreach ($object->getAreas() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['areas'] = $values;
        }
        return $data;
    }
}