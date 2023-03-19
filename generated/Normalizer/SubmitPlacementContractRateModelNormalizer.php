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
class SubmitPlacementContractRateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementContractRateModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementContractRateModel';
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
        $object = new \Varspool\JobAdder\V2\Model\SubmitPlacementContractRateModel();
        if (property_exists($data, 'ratePer')) {
            $object->setRatePer($data->{'ratePer'});
        }
        if (property_exists($data, 'hoursPerWeek')) {
            $object->setHoursPerWeek($data->{'hoursPerWeek'});
        }
        if (property_exists($data, 'daysPerWeek')) {
            $object->setDaysPerWeek($data->{'daysPerWeek'});
        }
        if (property_exists($data, 'clientRate')) {
            $object->setClientRate($data->{'clientRate'});
        }
        if (property_exists($data, 'candidateRate')) {
            $object->setCandidateRate($data->{'candidateRate'});
        }
        if (property_exists($data, 'onCostsType')) {
            $object->setOnCostsType($data->{'onCostsType'});
        }
        if (property_exists($data, 'onCosts')) {
            $object->setOnCosts($data->{'onCosts'});
        }
        if (property_exists($data, 'netMargin')) {
            $object->setNetMargin($data->{'netMargin'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getRatePer()) {
            $data->{'ratePer'} = $object->getRatePer();
        }
        if (null !== $object->getHoursPerWeek()) {
            $data->{'hoursPerWeek'} = $object->getHoursPerWeek();
        }
        if (null !== $object->getDaysPerWeek()) {
            $data->{'daysPerWeek'} = $object->getDaysPerWeek();
        }
        if (null !== $object->getClientRate()) {
            $data->{'clientRate'} = $object->getClientRate();
        }
        if (null !== $object->getCandidateRate()) {
            $data->{'candidateRate'} = $object->getCandidateRate();
        }
        if (null !== $object->getOnCostsType()) {
            $data->{'onCostsType'} = $object->getOnCostsType();
        }
        if (null !== $object->getOnCosts()) {
            $data->{'onCosts'} = $object->getOnCosts();
        }
        if (null !== $object->getNetMargin()) {
            $data->{'netMargin'} = $object->getNetMargin();
        }
        return $data;
    }
}