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
class PlacementLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementLinks';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementLinks';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementLinks();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
        }
        if (\array_key_exists('extendsPlacement', $data)) {
            $object->setExtendsPlacement($data['extendsPlacement']);
        }
        if (\array_key_exists('extendedByPlacement', $data)) {
            $object->setExtendedByPlacement($data['extendedByPlacement']);
        }
        if (\array_key_exists('creditsPlacement', $data)) {
            $object->setCreditsPlacement($data['creditsPlacement']);
        }
        if (\array_key_exists('creditedByPlacement', $data)) {
            $object->setCreditedByPlacement($data['creditedByPlacement']);
        }
        if (\array_key_exists('application', $data)) {
            $object->setApplication($data['application']);
        }
        if (\array_key_exists('attachments', $data)) {
            $object->setAttachments($data['attachments']);
        }
        if (\array_key_exists('notes', $data)) {
            $object->setNotes($data['notes']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('self') && null !== $object->getSelf()) {
            $data['self'] = $object->getSelf();
        }
        if ($object->isInitialized('extendsPlacement') && null !== $object->getExtendsPlacement()) {
            $data['extendsPlacement'] = $object->getExtendsPlacement();
        }
        if ($object->isInitialized('extendedByPlacement') && null !== $object->getExtendedByPlacement()) {
            $data['extendedByPlacement'] = $object->getExtendedByPlacement();
        }
        if ($object->isInitialized('creditsPlacement') && null !== $object->getCreditsPlacement()) {
            $data['creditsPlacement'] = $object->getCreditsPlacement();
        }
        if ($object->isInitialized('creditedByPlacement') && null !== $object->getCreditedByPlacement()) {
            $data['creditedByPlacement'] = $object->getCreditedByPlacement();
        }
        if ($object->isInitialized('application') && null !== $object->getApplication()) {
            $data['application'] = $object->getApplication();
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $data['attachments'] = $object->getAttachments();
        }
        if ($object->isInitialized('notes') && null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        return $data;
    }
}