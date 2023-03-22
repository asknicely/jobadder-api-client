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
class JobApplicationStatusModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobApplicationStatusModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('statusId', $data)) {
            $object->setStatusId($data['statusId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('rejected', $data)) {
            $object->setRejected($data['rejected']);
        }
        if (\array_key_exists('default', $data)) {
            $object->setDefault($data['default']);
        }
        if (\array_key_exists('defaultRejected', $data)) {
            $object->setDefaultRejected($data['defaultRejected']);
        }
        if (\array_key_exists('workflow', $data)) {
            $object->setWorkflow($this->denormalizer->denormalize($data['workflow'], 'Varspool\\JobAdder\\V2\\Model\\JobApplicationWorkflowModel', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['statusId'] = $object->getStatusId();
        $data['name'] = $object->getName();
        if ($object->isInitialized('active') && null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if ($object->isInitialized('rejected') && null !== $object->getRejected()) {
            $data['rejected'] = $object->getRejected();
        }
        if ($object->isInitialized('default') && null !== $object->getDefault()) {
            $data['default'] = $object->getDefault();
        }
        if ($object->isInitialized('defaultRejected') && null !== $object->getDefaultRejected()) {
            $data['defaultRejected'] = $object->getDefaultRejected();
        }
        if ($object->isInitialized('workflow') && null !== $object->getWorkflow()) {
            $data['workflow'] = $this->normalizer->normalize($object->getWorkflow(), 'json', $context);
        }
        return $data;
    }
}