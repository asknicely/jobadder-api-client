<?php

namespace AskNicely\JobAdder\Generated\Normalizer;

use AskNicely\JobAdder\Generated\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EmploymentModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'AskNicely\\JobAdder\\Generated\\Model\\EmploymentModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \AskNicely\JobAdder\Generated\Model\EmploymentModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \AskNicely\JobAdder\Generated\Model\EmploymentModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'current')) {
            $object->setCurrent($this->serializer->deserialize($data->{'current'}, 'AskNicely\\JobAdder\\Generated\\Model\\CurrentEmploymentModel', 'raw', $context));
        }
        if (property_exists($data, 'ideal')) {
            $object->setIdeal($this->serializer->deserialize($data->{'ideal'}, 'AskNicely\\JobAdder\\Generated\\Model\\IdealEmploymentModel', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCurrent()) {
            $data->{'current'} = $this->serializer->serialize($object->getCurrent(), 'raw', $context);
        }
        if (null !== $object->getIdeal()) {
            $data->{'ideal'} = $this->serializer->serialize($object->getIdeal(), 'raw', $context);
        }

        return $data;
    }
}
