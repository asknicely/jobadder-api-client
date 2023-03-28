<?php

namespace AskNicely\JobAdder\Generated\Normalizer;

use AskNicely\JobAdder\Generated\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class StartModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'AskNicely\\JobAdder\\Generated\\Model\\StartModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \AskNicely\JobAdder\Generated\Model\StartModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \AskNicely\JobAdder\Generated\Model\StartModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'immediate')) {
            $object->setImmediate($data->{'immediate'});
        }
        if (property_exists($data, 'relative')) {
            $object->setRelative($this->serializer->deserialize($data->{'relative'}, 'AskNicely\\JobAdder\\Generated\\Model\\RelativeStartModel', 'raw', $context));
        }
        if (property_exists($data, 'date')) {
            $object->setDate($data->{'date'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getImmediate()) {
            $data->{'immediate'} = $object->getImmediate();
        }
        if (null !== $object->getRelative()) {
            $data->{'relative'} = $this->serializer->serialize($object->getRelative(), 'raw', $context);
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate();
        }

        return $data;
    }
}
