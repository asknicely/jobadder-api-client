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
class ActivityDetailListModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\ActivityDetailListModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\ActivityDetailListModel';
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
        $object = new \Varspool\JobAdder\V2\Model\ActivityDetailListModel();
        if (property_exists($data, 'textAnswers')) {
            $values = array();
            foreach ($data->{'textAnswers'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\ActivitySingleValueDetailModel', 'json', $context);
            }
            $object->setTextAnswers($values);
        }
        if (property_exists($data, 'listValueAnswers')) {
            $values_1 = array();
            foreach ($data->{'listValueAnswers'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\ActivityListValueDetailModel', 'json', $context);
            }
            $object->setListValueAnswers($values_1);
        }
        if (property_exists($data, 'dateValueAnswers')) {
            $values_2 = array();
            foreach ($data->{'dateValueAnswers'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\ActivityDateValueDetailModel', 'json', $context);
            }
            $object->setDateValueAnswers($values_2);
        }
        if (property_exists($data, 'ratingValueAnswers')) {
            $values_3 = array();
            foreach ($data->{'ratingValueAnswers'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\ActivityRatingValueDetailModel', 'json', $context);
            }
            $object->setRatingValueAnswers($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTextAnswers()) {
            $values = array();
            foreach ($object->getTextAnswers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'textAnswers'} = $values;
        }
        if (null !== $object->getListValueAnswers()) {
            $values_1 = array();
            foreach ($object->getListValueAnswers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'listValueAnswers'} = $values_1;
        }
        if (null !== $object->getDateValueAnswers()) {
            $values_2 = array();
            foreach ($object->getDateValueAnswers() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'dateValueAnswers'} = $values_2;
        }
        if (null !== $object->getRatingValueAnswers()) {
            $values_3 = array();
            foreach ($object->getRatingValueAnswers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'ratingValueAnswers'} = $values_3;
        }
        return $data;
    }
}