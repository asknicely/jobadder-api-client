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
class UpdateCompanyCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\UpdateCompanyCommand';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\UpdateCompanyCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\UpdateCompanyCommand();
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'mainContactId')) {
            $object->setMainContactId($data->{'mainContactId'});
        }
        if (property_exists($data, 'primaryAddressId')) {
            $object->setPrimaryAddressId($data->{'primaryAddressId'});
        }
        if (property_exists($data, 'parentCompanyId')) {
            $object->setParentCompanyId($data->{'parentCompanyId'});
        }
        if (property_exists($data, 'summary')) {
            $object->setSummary($data->{'summary'});
        }
        if (property_exists($data, 'legalName')) {
            $object->setLegalName($data->{'legalName'});
        }
        if (property_exists($data, 'social')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'social'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSocial($values);
        }
        if (property_exists($data, 'statusId')) {
            $object->setStatusId($data->{'statusId'});
        }
        if (property_exists($data, 'custom')) {
            $values_1 = array();
            foreach ($data->{'custom'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_1);
        }
        if (property_exists($data, 'ownerUserId')) {
            $object->setOwnerUserId($data->{'ownerUserId'});
        }
        if (property_exists($data, 'recruiterUserId')) {
            $values_2 = array();
            foreach ($data->{'recruiterUserId'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRecruiterUserId($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getMainContactId()) {
            $data->{'mainContactId'} = $object->getMainContactId();
        }
        if (null !== $object->getPrimaryAddressId()) {
            $data->{'primaryAddressId'} = $object->getPrimaryAddressId();
        }
        if (null !== $object->getParentCompanyId()) {
            $data->{'parentCompanyId'} = $object->getParentCompanyId();
        }
        if (null !== $object->getSummary()) {
            $data->{'summary'} = $object->getSummary();
        }
        if (null !== $object->getLegalName()) {
            $data->{'legalName'} = $object->getLegalName();
        }
        if (null !== $object->getSocial()) {
            $values = new \stdClass();
            foreach ($object->getSocial() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'social'} = $values;
        }
        if (null !== $object->getStatusId()) {
            $data->{'statusId'} = $object->getStatusId();
        }
        if (null !== $object->getCustom()) {
            $values_1 = array();
            foreach ($object->getCustom() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'custom'} = $values_1;
        }
        if (null !== $object->getOwnerUserId()) {
            $data->{'ownerUserId'} = $object->getOwnerUserId();
        }
        if (null !== $object->getRecruiterUserId()) {
            $values_2 = array();
            foreach ($object->getRecruiterUserId() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'recruiterUserId'} = $values_2;
        }
        return $data;
    }
}