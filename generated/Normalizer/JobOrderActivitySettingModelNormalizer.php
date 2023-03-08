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
class JobOrderActivitySettingModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderActivitySettingModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderActivitySettingModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderActivitySettingModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('settingId', $data)) {
            $object->setSettingId($data['settingId']);
        }
        if (\array_key_exists('activityType', $data)) {
            $object->setActivityType($data['activityType']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('validStatuses', $data)) {
            $values = array();
            foreach ($data['validStatuses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context);
            }
            $object->setValidStatuses($values);
        }
        if (\array_key_exists('statusMandatory', $data)) {
            $object->setStatusMandatory($data['statusMandatory']);
        }
        if (\array_key_exists('questions', $data)) {
            $values_1 = array();
            foreach ($data['questions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\ActivityQuestionModel', 'json', $context);
            }
            $object->setQuestions($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('settingId') && null !== $object->getSettingId()) {
            $data['settingId'] = $object->getSettingId();
        }
        if ($object->isInitialized('activityType') && null !== $object->getActivityType()) {
            $data['activityType'] = $object->getActivityType();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('validStatuses') && null !== $object->getValidStatuses()) {
            $values = array();
            foreach ($object->getValidStatuses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['validStatuses'] = $values;
        }
        if ($object->isInitialized('statusMandatory') && null !== $object->getStatusMandatory()) {
            $data['statusMandatory'] = $object->getStatusMandatory();
        }
        if ($object->isInitialized('questions') && null !== $object->getQuestions()) {
            $values_1 = array();
            foreach ($object->getQuestions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['questions'] = $values_1;
        }
        return $data;
    }
}