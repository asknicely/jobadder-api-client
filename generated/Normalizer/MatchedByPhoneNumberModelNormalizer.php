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
class MatchedByPhoneNumberModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\MatchedByPhoneNumberModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\MatchedByPhoneNumberModel';
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
        $object = new \Varspool\JobAdder\V2\Model\MatchedByPhoneNumberModel();
        if (property_exists($data, 'candidates')) {
            $values = array();
            foreach ($data->{'candidates'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\CandidateMatchedByPhoneModel', 'json', $context);
            }
            $object->setCandidates($values);
        }
        if (property_exists($data, 'contacts')) {
            $values_1 = array();
            foreach ($data->{'contacts'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\ContactMatchedByPhoneModel', 'json', $context);
            }
            $object->setContacts($values_1);
        }
        if (property_exists($data, 'companies')) {
            $values_2 = array();
            foreach ($data->{'companies'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\CompanyMatchedByPhoneModel', 'json', $context);
            }
            $object->setCompanies($values_2);
        }
        if (property_exists($data, 'users')) {
            $values_3 = array();
            foreach ($data->{'users'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\UserMatchedByPhoneModel', 'json', $context);
            }
            $object->setUsers($values_3);
        }
        if (property_exists($data, 'quality')) {
            $object->setQuality($data->{'quality'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCandidates()) {
            $values = array();
            foreach ($object->getCandidates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'candidates'} = $values;
        }
        if (null !== $object->getContacts()) {
            $values_1 = array();
            foreach ($object->getContacts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'contacts'} = $values_1;
        }
        if (null !== $object->getCompanies()) {
            $values_2 = array();
            foreach ($object->getCompanies() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'companies'} = $values_2;
        }
        if (null !== $object->getUsers()) {
            $values_3 = array();
            foreach ($object->getUsers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'users'} = $values_3;
        }
        if (null !== $object->getQuality()) {
            $data->{'quality'} = $object->getQuality();
        }
        return $data;
    }
}