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
class ActivityAnswerListModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\ActivityAnswerListModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\ActivityAnswerListModel';
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
        $object = new \Varspool\JobAdder\V2\Model\ActivityAnswerListModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('textAnswers', $data)) {
            $values = array();
            foreach ($data['textAnswers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\ActivityTextAnswerModel', 'json', $context);
            }
            $object->setTextAnswers($values);
        }
        if (\array_key_exists('listValueAnswers', $data)) {
            $values_1 = array();
            foreach ($data['listValueAnswers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\ActivityListValueAnswerModel', 'json', $context);
            }
            $object->setListValueAnswers($values_1);
        }
        if (\array_key_exists('dateRangeValueAnswers', $data)) {
            $values_2 = array();
            foreach ($data['dateRangeValueAnswers'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\ActivityDateRangeAnswerModel', 'json', $context);
            }
            $object->setDateRangeValueAnswers($values_2);
        }
        if (\array_key_exists('ratingValueAnswers', $data)) {
            $values_3 = array();
            foreach ($data['ratingValueAnswers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\ActivityRatingAnswerModel', 'json', $context);
            }
            $object->setRatingValueAnswers($values_3);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('textAnswers') && null !== $object->getTextAnswers()) {
            $values = array();
            foreach ($object->getTextAnswers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['textAnswers'] = $values;
        }
        if ($object->isInitialized('listValueAnswers') && null !== $object->getListValueAnswers()) {
            $values_1 = array();
            foreach ($object->getListValueAnswers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['listValueAnswers'] = $values_1;
        }
        if ($object->isInitialized('dateRangeValueAnswers') && null !== $object->getDateRangeValueAnswers()) {
            $values_2 = array();
            foreach ($object->getDateRangeValueAnswers() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['dateRangeValueAnswers'] = $values_2;
        }
        if ($object->isInitialized('ratingValueAnswers') && null !== $object->getRatingValueAnswers()) {
            $values_3 = array();
            foreach ($object->getRatingValueAnswers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['ratingValueAnswers'] = $values_3;
        }
        return $data;
    }
}