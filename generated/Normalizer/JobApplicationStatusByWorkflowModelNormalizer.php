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
class JobApplicationStatusByWorkflowModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusByWorkflowModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusByWorkflowModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobApplicationStatusByWorkflowModel();
        if (property_exists($data, 'stage')) {
            $object->setStage($data->{'stage'});
        }
        if (property_exists($data, 'stageIndex')) {
            $object->setStageIndex($data->{'stageIndex'});
        }
        if (property_exists($data, 'step')) {
            $object->setStep($data->{'step'});
        }
        if (property_exists($data, 'progress')) {
            $object->setProgress($data->{'progress'});
        }
        if (property_exists($data, 'status')) {
            $values = array();
            foreach ($data->{'status'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusNameModel', 'json', $context);
            }
            $object->setStatus($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStage()) {
            $data->{'stage'} = $object->getStage();
        }
        if (null !== $object->getStageIndex()) {
            $data->{'stageIndex'} = $object->getStageIndex();
        }
        if (null !== $object->getStep()) {
            $data->{'step'} = $object->getStep();
        }
        if (null !== $object->getProgress()) {
            $data->{'progress'} = $object->getProgress();
        }
        if (null !== $object->getStatus()) {
            $values = array();
            foreach ($object->getStatus() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'status'} = $values;
        }
        return $data;
    }
}