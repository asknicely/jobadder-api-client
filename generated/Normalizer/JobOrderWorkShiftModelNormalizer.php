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
class JobOrderWorkShiftModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderWorkShiftModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderWorkShiftModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderWorkShiftModel();
        if (property_exists($data, 'startTime')) {
            $object->setStartTime($data->{'startTime'});
        }
        if (property_exists($data, 'endTime')) {
            $object->setEndTime($data->{'endTime'});
        }
        if (property_exists($data, 'workDays')) {
            $values = array();
            foreach ($data->{'workDays'} as $value) {
                $values[] = $value;
            }
            $object->setWorkDays($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStartTime()) {
            $data->{'startTime'} = $object->getStartTime();
        }
        if (null !== $object->getEndTime()) {
            $data->{'endTime'} = $object->getEndTime();
        }
        if (null !== $object->getWorkDays()) {
            $values = array();
            foreach ($object->getWorkDays() as $value) {
                $values[] = $value;
            }
            $data->{'workDays'} = $values;
        }
        return $data;
    }
}