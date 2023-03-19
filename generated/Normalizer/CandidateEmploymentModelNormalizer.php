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
class CandidateEmploymentModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidateEmploymentModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidateEmploymentModel';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidateEmploymentModel();
        if (property_exists($data, 'current')) {
            $object->setCurrent($this->denormalizer->denormalize($data->{'current'}, 'Varspool\\JobAdder\\V2\\Model\\CurrentEmploymentModel', 'json', $context));
        }
        if (property_exists($data, 'ideal')) {
            $object->setIdeal($this->denormalizer->denormalize($data->{'ideal'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateIdealEmploymentModel', 'json', $context));
        }
        if (property_exists($data, 'history')) {
            $values = array();
            foreach ($data->{'history'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\CandidateEmploymentHistoryModel', 'json', $context);
            }
            $object->setHistory($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCurrent()) {
            $data->{'current'} = $this->normalizer->normalize($object->getCurrent(), 'json', $context);
        }
        if (null !== $object->getIdeal()) {
            $data->{'ideal'} = $this->normalizer->normalize($object->getIdeal(), 'json', $context);
        }
        if (null !== $object->getHistory()) {
            $values = array();
            foreach ($object->getHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'history'} = $values;
        }
        return $data;
    }
}