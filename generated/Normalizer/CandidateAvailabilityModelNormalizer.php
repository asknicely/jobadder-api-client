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
class CandidateAvailabilityModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidateAvailabilityModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidateAvailabilityModel';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidateAvailabilityModel();
        if (property_exists($data, 'date')) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d', $data->{'date'})->setTime(0, 0, 0));
        }
        if (property_exists($data, 'day')) {
            $object->setDay($data->{'day'});
        }
        if (property_exists($data, 'shifts')) {
            $values = array();
            foreach ($data->{'shifts'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\TimeRangeModel', 'json', $context);
            }
            $object->setShifts($values);
        }
        if (property_exists($data, 'recurring')) {
            $object->setRecurring($data->{'recurring'});
        }
        if (property_exists($data, 'until')) {
            $object->setUntil(\DateTime::createFromFormat('Y-m-d', $data->{'until'})->setTime(0, 0, 0));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate()->format('Y-m-d');
        }
        if (null !== $object->getDay()) {
            $data->{'day'} = $object->getDay();
        }
        if (null !== $object->getRecurring()) {
            $data->{'recurring'} = $object->getRecurring();
        }
        if (null !== $object->getUntil()) {
            $data->{'until'} = $object->getUntil()->format('Y-m-d');
        }
        return $data;
    }
}