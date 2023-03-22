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
class JobApplicationStatusByWorkflowModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusByWorkflowModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusByWorkflowModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobApplicationStatusByWorkflowModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stage', $data)) {
            $object->setStage($data['stage']);
        }
        if (\array_key_exists('stageIndex', $data)) {
            $object->setStageIndex($data['stageIndex']);
        }
        if (\array_key_exists('step', $data)) {
            $object->setStep($data['step']);
        }
        if (\array_key_exists('progress', $data)) {
            $object->setProgress($data['progress']);
        }
        if (\array_key_exists('status', $data)) {
            $values = array();
            foreach ($data['status'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusNameModel', 'json', $context);
            }
            $object->setStatus($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['stage'] = $object->getStage();
        if ($object->isInitialized('stageIndex') && null !== $object->getStageIndex()) {
            $data['stageIndex'] = $object->getStageIndex();
        }
        if ($object->isInitialized('step') && null !== $object->getStep()) {
            $data['step'] = $object->getStep();
        }
        if ($object->isInitialized('progress') && null !== $object->getProgress()) {
            $data['progress'] = $object->getProgress();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $values = array();
            foreach ($object->getStatus() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['status'] = $values;
        }
        return $data;
    }
}