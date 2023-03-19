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
class JobAdPortalSalaryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobAdPortalSalaryModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobAdPortalSalaryModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobAdPortalSalaryModel();
        if (property_exists($data, 'ratePer')) {
            $object->setRatePer($data->{'ratePer'});
        }
        if (property_exists($data, 'rateLow')) {
            $object->setRateLow($data->{'rateLow'});
        }
        if (property_exists($data, 'rateHigh')) {
            $object->setRateHigh($data->{'rateHigh'});
        }
        if (property_exists($data, 'details')) {
            $object->setDetails($data->{'details'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getRatePer()) {
            $data->{'ratePer'} = $object->getRatePer();
        }
        if (null !== $object->getRateLow()) {
            $data->{'rateLow'} = $object->getRateLow();
        }
        if (null !== $object->getRateHigh()) {
            $data->{'rateHigh'} = $object->getRateHigh();
        }
        if (null !== $object->getDetails()) {
            $data->{'details'} = $object->getDetails();
        }
        return $data;
    }
}