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
class SubmitPlacementContractRateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementContractRateModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\SubmitPlacementContractRateModel';
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
        $object = new \Varspool\JobAdder\V2\Model\SubmitPlacementContractRateModel();
        if (\array_key_exists('hoursPerWeek', $data) && \is_int($data['hoursPerWeek'])) {
            $data['hoursPerWeek'] = (double) $data['hoursPerWeek'];
        }
        if (\array_key_exists('daysPerWeek', $data) && \is_int($data['daysPerWeek'])) {
            $data['daysPerWeek'] = (double) $data['daysPerWeek'];
        }
        if (\array_key_exists('clientRate', $data) && \is_int($data['clientRate'])) {
            $data['clientRate'] = (double) $data['clientRate'];
        }
        if (\array_key_exists('candidateRate', $data) && \is_int($data['candidateRate'])) {
            $data['candidateRate'] = (double) $data['candidateRate'];
        }
        if (\array_key_exists('onCosts', $data) && \is_int($data['onCosts'])) {
            $data['onCosts'] = (double) $data['onCosts'];
        }
        if (\array_key_exists('netMargin', $data) && \is_int($data['netMargin'])) {
            $data['netMargin'] = (double) $data['netMargin'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ratePer', $data)) {
            $object->setRatePer($data['ratePer']);
        }
        if (\array_key_exists('hoursPerWeek', $data)) {
            $object->setHoursPerWeek($data['hoursPerWeek']);
        }
        if (\array_key_exists('daysPerWeek', $data)) {
            $object->setDaysPerWeek($data['daysPerWeek']);
        }
        if (\array_key_exists('clientRate', $data)) {
            $object->setClientRate($data['clientRate']);
        }
        if (\array_key_exists('candidateRate', $data)) {
            $object->setCandidateRate($data['candidateRate']);
        }
        if (\array_key_exists('onCostsType', $data)) {
            $object->setOnCostsType($data['onCostsType']);
        }
        if (\array_key_exists('onCosts', $data)) {
            $object->setOnCosts($data['onCosts']);
        }
        if (\array_key_exists('netMargin', $data)) {
            $object->setNetMargin($data['netMargin']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('ratePer') && null !== $object->getRatePer()) {
            $data['ratePer'] = $object->getRatePer();
        }
        if ($object->isInitialized('hoursPerWeek') && null !== $object->getHoursPerWeek()) {
            $data['hoursPerWeek'] = $object->getHoursPerWeek();
        }
        if ($object->isInitialized('daysPerWeek') && null !== $object->getDaysPerWeek()) {
            $data['daysPerWeek'] = $object->getDaysPerWeek();
        }
        if ($object->isInitialized('clientRate') && null !== $object->getClientRate()) {
            $data['clientRate'] = $object->getClientRate();
        }
        if ($object->isInitialized('candidateRate') && null !== $object->getCandidateRate()) {
            $data['candidateRate'] = $object->getCandidateRate();
        }
        if ($object->isInitialized('onCostsType') && null !== $object->getOnCostsType()) {
            $data['onCostsType'] = $object->getOnCostsType();
        }
        if ($object->isInitialized('onCosts') && null !== $object->getOnCosts()) {
            $data['onCosts'] = $object->getOnCosts();
        }
        if ($object->isInitialized('netMargin') && null !== $object->getNetMargin()) {
            $data['netMargin'] = $object->getNetMargin();
        }
        return $data;
    }
}