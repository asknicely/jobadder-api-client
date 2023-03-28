<?php

namespace AskNicely\JobAdder\Generated\Normalizer;

use AskNicely\JobAdder\Generated\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class LocationModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'AskNicely\\JobAdder\\Generated\\Model\\LocationModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \AskNicely\JobAdder\Generated\Model\LocationModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \AskNicely\JobAdder\Generated\Model\LocationModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'locationId')) {
            $object->setLocationId($data->{'locationId'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'areas')) {
            $values = [];
            foreach ($data->{'areas'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'AskNicely\\JobAdder\\Generated\\Model\\LocationAreaModel', 'raw', $context);
            }
            $object->setAreas($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLocationId()) {
            $data->{'locationId'} = $object->getLocationId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getAreas()) {
            $values = [];
            foreach ($object->getAreas() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'areas'} = $values;
        }

        return $data;
    }
}
