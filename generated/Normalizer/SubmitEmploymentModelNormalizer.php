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
class SubmitEmploymentModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\SubmitEmploymentModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\SubmitEmploymentModel';
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
        $object = new \Varspool\JobAdder\V2\Model\SubmitEmploymentModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current', $data)) {
            $object->setCurrent($this->denormalizer->denormalize($data['current'], 'Varspool\\JobAdder\\V2\\Model\\SubmitCurrentEmploymentModel', 'json', $context));
        }
        if (\array_key_exists('ideal', $data)) {
            $object->setIdeal($this->denormalizer->denormalize($data['ideal'], 'Varspool\\JobAdder\\V2\\Model\\SubmitIdealEmploymentModel', 'json', $context));
        }
        if (\array_key_exists('history', $data)) {
            $values = array();
            foreach ($data['history'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\CandidateEmploymentHistoryModel', 'json', $context);
            }
            $object->setHistory($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('current') && null !== $object->getCurrent()) {
            $data['current'] = $this->normalizer->normalize($object->getCurrent(), 'json', $context);
        }
        if ($object->isInitialized('ideal') && null !== $object->getIdeal()) {
            $data['ideal'] = $this->normalizer->normalize($object->getIdeal(), 'json', $context);
        }
        if ($object->isInitialized('history') && null !== $object->getHistory()) {
            $values = array();
            foreach ($object->getHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['history'] = $values;
        }
        return $data;
    }
}