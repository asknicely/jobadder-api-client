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
class CompanyActivitySettingModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CompanyActivitySettingModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CompanyActivitySettingModel';
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
        $object = new \Varspool\JobAdder\V2\Model\CompanyActivitySettingModel();
        if (property_exists($data, 'settingId')) {
            $object->setSettingId($data->{'settingId'});
        }
        if (property_exists($data, 'activityType')) {
            $object->setActivityType($data->{'activityType'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'validStatuses')) {
            $values = array();
            foreach ($data->{'validStatuses'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context);
            }
            $object->setValidStatuses($values);
        }
        if (property_exists($data, 'statusMandatory')) {
            $object->setStatusMandatory($data->{'statusMandatory'});
        }
        if (property_exists($data, 'questions')) {
            $values_1 = array();
            foreach ($data->{'questions'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\ActivityQuestionModel', 'json', $context);
            }
            $object->setQuestions($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSettingId()) {
            $data->{'settingId'} = $object->getSettingId();
        }
        if (null !== $object->getActivityType()) {
            $data->{'activityType'} = $object->getActivityType();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getValidStatuses()) {
            $values = array();
            foreach ($object->getValidStatuses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'validStatuses'} = $values;
        }
        if (null !== $object->getStatusMandatory()) {
            $data->{'statusMandatory'} = $object->getStatusMandatory();
        }
        if (null !== $object->getQuestions()) {
            $values_1 = array();
            foreach ($object->getQuestions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'questions'} = $values_1;
        }
        return $data;
    }
}