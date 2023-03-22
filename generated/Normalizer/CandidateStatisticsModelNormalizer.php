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
class CandidateStatisticsModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidateStatisticsModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidateStatisticsModel';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidateStatisticsModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('applications', $data)) {
            $object->setApplications($this->denormalizer->denormalize($data['applications'], 'Varspool\\JobAdder\\V2\\Model\\CandidateJobApplicationStatisticsSummaryModel', 'json', $context));
        }
        if (\array_key_exists('placements', $data)) {
            $object->setPlacements($this->denormalizer->denormalize($data['placements'], 'Varspool\\JobAdder\\V2\\Model\\CandidatePlacementStatisticsSummaryModel', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('applications') && null !== $object->getApplications()) {
            $data['applications'] = $this->normalizer->normalize($object->getApplications(), 'json', $context);
        }
        if ($object->isInitialized('placements') && null !== $object->getPlacements()) {
            $data['placements'] = $this->normalizer->normalize($object->getPlacements(), 'json', $context);
        }
        return $data;
    }
}