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
class JobAdPortalFieldModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobAdPortalFieldModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobAdPortalFieldModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobAdPortalFieldModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fieldId', $data)) {
            $object->setFieldId($data['fieldId']);
        }
        if (\array_key_exists('fieldName', $data)) {
            $object->setFieldName($data['fieldName']);
        }
        if (\array_key_exists('valueId', $data)) {
            $object->setValueId($data['valueId']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
        }
        if (\array_key_exists('externalValue', $data)) {
            $object->setExternalValue($data['externalValue']);
        }
        if (\array_key_exists('fields', $data)) {
            $values = array();
            foreach ($data['fields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\JobAdPortalChildFieldModel', 'json', $context);
            }
            $object->setFields($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('fieldId') && null !== $object->getFieldId()) {
            $data['fieldId'] = $object->getFieldId();
        }
        if ($object->isInitialized('fieldName') && null !== $object->getFieldName()) {
            $data['fieldName'] = $object->getFieldName();
        }
        if ($object->isInitialized('valueId') && null !== $object->getValueId()) {
            $data['valueId'] = $object->getValueId();
        }
        if ($object->isInitialized('value') && null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        if ($object->isInitialized('externalValue') && null !== $object->getExternalValue()) {
            $data['externalValue'] = $object->getExternalValue();
        }
        if ($object->isInitialized('fields') && null !== $object->getFields()) {
            $values = array();
            foreach ($object->getFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['fields'] = $values;
        }
        return $data;
    }
}