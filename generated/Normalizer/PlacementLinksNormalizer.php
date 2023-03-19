<?php

namespace Varspool\JobAdder\V2\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PlacementLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementLinks';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \Varspool\JobAdder\V2\Model\PlacementLinks();
        if (property_exists($data, 'self')) {
            $object->setSelf($data->{'self'});
        }
        if (property_exists($data, 'extendsPlacement')) {
            $object->setExtendsPlacement($data->{'extendsPlacement'});
        }
        if (property_exists($data, 'extendedByPlacement')) {
            $object->setExtendedByPlacement($data->{'extendedByPlacement'});
        }
        if (property_exists($data, 'creditsPlacement')) {
            $object->setCreditsPlacement($data->{'creditsPlacement'});
        }
        if (property_exists($data, 'creditedByPlacement')) {
            $object->setCreditedByPlacement($data->{'creditedByPlacement'});
        }
        if (property_exists($data, 'application')) {
            $object->setApplication($data->{'application'});
        }
        if (property_exists($data, 'attachments')) {
            $object->setAttachments($data->{'attachments'});
        }
        if (property_exists($data, 'notes')) {
            $object->setNotes($data->{'notes'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSelf()) {
            $data->{'self'} = $object->getSelf();
        }
        if (null !== $object->getExtendsPlacement()) {
            $data->{'extendsPlacement'} = $object->getExtendsPlacement();
        }
        if (null !== $object->getExtendedByPlacement()) {
            $data->{'extendedByPlacement'} = $object->getExtendedByPlacement();
        }
        if (null !== $object->getCreditsPlacement()) {
            $data->{'creditsPlacement'} = $object->getCreditsPlacement();
        }
        if (null !== $object->getCreditedByPlacement()) {
            $data->{'creditedByPlacement'} = $object->getCreditedByPlacement();
        }
        if (null !== $object->getApplication()) {
            $data->{'application'} = $object->getApplication();
        }
        if (null !== $object->getAttachments()) {
            $data->{'attachments'} = $object->getAttachments();
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        return $data;
    }
}