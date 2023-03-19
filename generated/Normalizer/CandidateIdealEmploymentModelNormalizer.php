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
class CandidateIdealEmploymentModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidateIdealEmploymentModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidateIdealEmploymentModel';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidateIdealEmploymentModel();
        if (property_exists($data, 'position')) {
            $object->setPosition($data->{'position'});
        }
        if (property_exists($data, 'workType')) {
            $object->setWorkType($this->denormalizer->denormalize($data->{'workType'}, 'Varspool\\JobAdder\\V2\\Model\\WorkTypeModel', 'json', $context));
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->denormalizer->denormalize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\SalaryRangeModel', 'json', $context));
        }
        if (property_exists($data, 'other')) {
            $values = array();
            foreach ($data->{'other'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\CandidateIdealSalaryModel', 'json', $context);
            }
            $object->setOther($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPosition()) {
            $data->{'position'} = $object->getPosition();
        }
        if (null !== $object->getWorkType()) {
            $data->{'workType'} = $this->normalizer->normalize($object->getWorkType(), 'json', $context);
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if (null !== $object->getOther()) {
            $values = array();
            foreach ($object->getOther() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'other'} = $values;
        }
        return $data;
    }
}