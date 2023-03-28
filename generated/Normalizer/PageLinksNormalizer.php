<?php

namespace AskNicely\JobAdder\Generated\Normalizer;

use AskNicely\JobAdder\Generated\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PageLinksNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'AskNicely\\JobAdder\\Generated\\Model\\PageLinks') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \AskNicely\JobAdder\Generated\Model\PageLinks) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \AskNicely\JobAdder\Generated\Model\PageLinks();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'first')) {
            $object->setFirst($data->{'first'});
        }
        if (property_exists($data, 'prev')) {
            $object->setPrev($data->{'prev'});
        }
        if (property_exists($data, 'next')) {
            $object->setNext($data->{'next'});
        }
        if (property_exists($data, 'last')) {
            $object->setLast($data->{'last'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFirst()) {
            $data->{'first'} = $object->getFirst();
        }
        if (null !== $object->getPrev()) {
            $data->{'prev'} = $object->getPrev();
        }
        if (null !== $object->getNext()) {
            $data->{'next'} = $object->getNext();
        }
        if (null !== $object->getLast()) {
            $data->{'last'} = $object->getLast();
        }

        return $data;
    }
}
