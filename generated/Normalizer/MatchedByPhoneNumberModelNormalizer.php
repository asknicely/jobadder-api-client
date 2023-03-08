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
class MatchedByPhoneNumberModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\MatchedByPhoneNumberModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\MatchedByPhoneNumberModel';
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
        $object = new \Varspool\JobAdder\V2\Model\MatchedByPhoneNumberModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('candidates', $data)) {
            $values = array();
            foreach ($data['candidates'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\CandidateMatchedByPhoneModel', 'json', $context);
            }
            $object->setCandidates($values);
        }
        if (\array_key_exists('contacts', $data)) {
            $values_1 = array();
            foreach ($data['contacts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\ContactMatchedByPhoneModel', 'json', $context);
            }
            $object->setContacts($values_1);
        }
        if (\array_key_exists('companies', $data)) {
            $values_2 = array();
            foreach ($data['companies'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\CompanyMatchedByPhoneModel', 'json', $context);
            }
            $object->setCompanies($values_2);
        }
        if (\array_key_exists('users', $data)) {
            $values_3 = array();
            foreach ($data['users'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\UserMatchedByPhoneModel', 'json', $context);
            }
            $object->setUsers($values_3);
        }
        if (\array_key_exists('quality', $data)) {
            $object->setQuality($data['quality']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('candidates') && null !== $object->getCandidates()) {
            $values = array();
            foreach ($object->getCandidates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['candidates'] = $values;
        }
        if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
            $values_1 = array();
            foreach ($object->getContacts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['contacts'] = $values_1;
        }
        if ($object->isInitialized('companies') && null !== $object->getCompanies()) {
            $values_2 = array();
            foreach ($object->getCompanies() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['companies'] = $values_2;
        }
        if ($object->isInitialized('users') && null !== $object->getUsers()) {
            $values_3 = array();
            foreach ($object->getUsers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['users'] = $values_3;
        }
        if ($object->isInitialized('quality') && null !== $object->getQuality()) {
            $data['quality'] = $object->getQuality();
        }
        return $data;
    }
}