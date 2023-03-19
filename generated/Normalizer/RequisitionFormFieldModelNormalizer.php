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
class RequisitionFormFieldModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\RequisitionFormFieldModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\RequisitionFormFieldModel';
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
        $object = new \Varspool\JobAdder\V2\Model\RequisitionFormFieldModel();
        if (property_exists($data, 'fieldID')) {
            $object->setFieldID($data->{'fieldID'});
        }
        if (property_exists($data, 'formID')) {
            $object->setFormID($data->{'formID'});
        }
        if (property_exists($data, 'fieldName')) {
            $object->setFieldName($data->{'fieldName'});
        }
        if (property_exists($data, 'visible')) {
            $object->setVisible($data->{'visible'});
        }
        if (property_exists($data, 'required')) {
            $object->setRequired($data->{'required'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFieldID()) {
            $data->{'fieldID'} = $object->getFieldID();
        }
        if (null !== $object->getFormID()) {
            $data->{'formID'} = $object->getFormID();
        }
        if (null !== $object->getFieldName()) {
            $data->{'fieldName'} = $object->getFieldName();
        }
        if (null !== $object->getVisible()) {
            $data->{'visible'} = $object->getVisible();
        }
        if (null !== $object->getRequired()) {
            $data->{'required'} = $object->getRequired();
        }
        return $data;
    }
}