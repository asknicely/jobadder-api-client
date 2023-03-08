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
class CurrentEmploymentModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CurrentEmploymentModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CurrentEmploymentModel';
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
        $object = new \Varspool\JobAdder\V2\Model\CurrentEmploymentModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('employer', $data)) {
            $object->setEmployer($data['employer']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('workType', $data)) {
            $object->setWorkType($this->denormalizer->denormalize($data['workType'], 'Varspool\\JobAdder\\V2\\Model\\WorkTypeModel', 'json', $context));
        }
        if (\array_key_exists('salary', $data)) {
            $object->setSalary($this->denormalizer->denormalize($data['salary'], 'Varspool\\JobAdder\\V2\\Model\\SalaryModel', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('employer') && null !== $object->getEmployer()) {
            $data['employer'] = $object->getEmployer();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('workType') && null !== $object->getWorkType()) {
            $data['workType'] = $this->normalizer->normalize($object->getWorkType(), 'json', $context);
        }
        if ($object->isInitialized('salary') && null !== $object->getSalary()) {
            $data['salary'] = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        return $data;
    }
}