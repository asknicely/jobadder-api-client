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
class RequisitionFormModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\RequisitionFormModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\RequisitionFormModel';
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
        $object = new \Varspool\JobAdder\V2\Model\RequisitionFormModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('formName', $data)) {
            $object->setFormName($data['formName']);
        }
        if (\array_key_exists('formID', $data)) {
            $object->setFormID($data['formID']);
        }
        if (\array_key_exists('default', $data)) {
            $object->setDefault($data['default']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('formFields', $data)) {
            $values = array();
            foreach ($data['formFields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\RequisitionFormFieldModel', 'json', $context);
            }
            $object->setFormFields($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('formName') && null !== $object->getFormName()) {
            $data['formName'] = $object->getFormName();
        }
        if ($object->isInitialized('formID') && null !== $object->getFormID()) {
            $data['formID'] = $object->getFormID();
        }
        if ($object->isInitialized('default') && null !== $object->getDefault()) {
            $data['default'] = $object->getDefault();
        }
        if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if ($object->isInitialized('formFields') && null !== $object->getFormFields()) {
            $values = array();
            foreach ($object->getFormFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['formFields'] = $values;
        }
        return $data;
    }
}