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
class UpdateCompanyCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\UpdateCompanyCommand';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\UpdateCompanyCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\UpdateCompanyCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('mainContactId', $data)) {
            $object->setMainContactId($data['mainContactId']);
        }
        if (\array_key_exists('primaryAddressId', $data)) {
            $object->setPrimaryAddressId($data['primaryAddressId']);
        }
        if (\array_key_exists('parentCompanyId', $data)) {
            $object->setParentCompanyId($data['parentCompanyId']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('legalName', $data)) {
            $object->setLegalName($data['legalName']);
        }
        if (\array_key_exists('social', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['social'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSocial($values);
        }
        if (\array_key_exists('statusId', $data)) {
            $object->setStatusId($data['statusId']);
        }
        if (\array_key_exists('custom', $data)) {
            $values_1 = array();
            foreach ($data['custom'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\SubmitCustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_1);
        }
        if (\array_key_exists('ownerUserId', $data)) {
            $object->setOwnerUserId($data['ownerUserId']);
        }
        if (\array_key_exists('recruiterUserId', $data)) {
            $values_2 = array();
            foreach ($data['recruiterUserId'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRecruiterUserId($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        if ($object->isInitialized('mainContactId') && null !== $object->getMainContactId()) {
            $data['mainContactId'] = $object->getMainContactId();
        }
        if ($object->isInitialized('primaryAddressId') && null !== $object->getPrimaryAddressId()) {
            $data['primaryAddressId'] = $object->getPrimaryAddressId();
        }
        if ($object->isInitialized('parentCompanyId') && null !== $object->getParentCompanyId()) {
            $data['parentCompanyId'] = $object->getParentCompanyId();
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('legalName') && null !== $object->getLegalName()) {
            $data['legalName'] = $object->getLegalName();
        }
        if ($object->isInitialized('social') && null !== $object->getSocial()) {
            $values = array();
            foreach ($object->getSocial() as $key => $value) {
                $values[$key] = $value;
            }
            $data['social'] = $values;
        }
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['statusId'] = $object->getStatusId();
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values_1 = array();
            foreach ($object->getCustom() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom'] = $values_1;
        }
        if ($object->isInitialized('ownerUserId') && null !== $object->getOwnerUserId()) {
            $data['ownerUserId'] = $object->getOwnerUserId();
        }
        if ($object->isInitialized('recruiterUserId') && null !== $object->getRecruiterUserId()) {
            $values_2 = array();
            foreach ($object->getRecruiterUserId() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['recruiterUserId'] = $values_2;
        }
        return $data;
    }
}