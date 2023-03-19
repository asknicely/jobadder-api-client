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
class CandidateStatisticsModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidateStatisticsModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidateStatisticsModel';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidateStatisticsModel();
        if (property_exists($data, 'applications')) {
            $object->setApplications($this->denormalizer->denormalize($data->{'applications'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateJobApplicationStatisticsSummaryModel', 'json', $context));
        }
        if (property_exists($data, 'placements')) {
            $object->setPlacements($this->denormalizer->denormalize($data->{'placements'}, 'Varspool\\JobAdder\\V2\\Model\\CandidatePlacementStatisticsSummaryModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getApplications()) {
            $data->{'applications'} = $this->normalizer->normalize($object->getApplications(), 'json', $context);
        }
        if (null !== $object->getPlacements()) {
            $data->{'placements'} = $this->normalizer->normalize($object->getPlacements(), 'json', $context);
        }
        return $data;
    }
}