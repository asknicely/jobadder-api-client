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
class CandidatePayrollBillingModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidatePayrollBillingModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidatePayrollBillingModel';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidatePayrollBillingModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('candidateId', $data)) {
            $object->setCandidateId($data['candidateId']);
        }
        if (\array_key_exists('externalCandidateId', $data)) {
            $object->setExternalCandidateId($data['externalCandidateId']);
        }
        if (\array_key_exists('office', $data)) {
            $object->setOffice($data['office']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('skillGroup', $data)) {
            $object->setSkillGroup($data['skillGroup']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('candidateId') && null !== $object->getCandidateId()) {
            $data['candidateId'] = $object->getCandidateId();
        }
        if ($object->isInitialized('externalCandidateId') && null !== $object->getExternalCandidateId()) {
            $data['externalCandidateId'] = $object->getExternalCandidateId();
        }
        if ($object->isInitialized('office') && null !== $object->getOffice()) {
            $data['office'] = $object->getOffice();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('skillGroup') && null !== $object->getSkillGroup()) {
            $data['skillGroup'] = $object->getSkillGroup();
        }
        return $data;
    }
}