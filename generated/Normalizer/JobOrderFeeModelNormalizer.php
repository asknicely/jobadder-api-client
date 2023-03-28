<?php

namespace AskNicely\JobAdder\Generated\Normalizer;

use AskNicely\JobAdder\Generated\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class JobOrderFeeModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'AskNicely\\JobAdder\\Generated\\Model\\JobOrderFeeModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \AskNicely\JobAdder\Generated\Model\JobOrderFeeModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \AskNicely\JobAdder\Generated\Model\JobOrderFeeModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'rateType')) {
            $object->setRateType($data->{'rateType'});
        }
        if (property_exists($data, 'rate')) {
            $object->setRate($data->{'rate'});
        }
        if (property_exists($data, 'estimatedTotal')) {
            $object->setEstimatedTotal($data->{'estimatedTotal'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRateType()) {
            $data->{'rateType'} = $object->getRateType();
        }
        if (null !== $object->getRate()) {
            $data->{'rate'} = $object->getRate();
        }
        if (null !== $object->getEstimatedTotal()) {
            $data->{'estimatedTotal'} = $object->getEstimatedTotal();
        }

        return $data;
    }
}
