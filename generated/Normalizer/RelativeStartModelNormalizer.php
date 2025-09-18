<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Varspool\JobAdder\V2\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

class RelativeStartModelNormalizer implements SerializerAwareInterface, DenormalizerInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Varspool\\JobAdder\\V2\\Model\\RelativeStartModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Varspool\JobAdder\V2\Model\RelativeStartModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Varspool\JobAdder\V2\Model\RelativeStartModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'period')) {
            $object->setPeriod($data->{'period'});
        }
        if (property_exists($data, 'unit')) {
            $object->setUnit($data->{'unit'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPeriod()) {
            $data->{'period'} = $object->getPeriod();
        }
        if (null !== $object->getUnit()) {
            $data->{'unit'} = $object->getUnit();
        }

        return $data;
    }
}
