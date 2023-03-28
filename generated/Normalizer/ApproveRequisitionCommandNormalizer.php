<?php

namespace AskNicely\JobAdder\Generated\Normalizer;

use AskNicely\JobAdder\Generated\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ApproveRequisitionCommandNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'AskNicely\\JobAdder\\Generated\\Model\\ApproveRequisitionCommand') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \AskNicely\JobAdder\Generated\Model\ApproveRequisitionCommand) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \AskNicely\JobAdder\Generated\Model\ApproveRequisitionCommand();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'approverId')) {
            $object->setApproverId($data->{'approverId'});
        }
        if (property_exists($data, 'portalUrl')) {
            $object->setPortalUrl($data->{'portalUrl'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApproverId()) {
            $data->{'approverId'} = $object->getApproverId();
        }
        if (null !== $object->getPortalUrl()) {
            $data->{'portalUrl'} = $object->getPortalUrl();
        }

        return $data;
    }
}
