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
class FolderRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\FolderRepresentation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\FolderRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\FolderRepresentation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('folderId', $data)) {
            $object->setFolderId($data['folderId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('sharedWith', $data)) {
            $values = array();
            foreach ($data['sharedWith'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setSharedWith($values);
        }
        if (\array_key_exists('entityIDs', $data)) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['entityIDs'] as $key => $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[$key] = $values_2;
            }
            $object->setEntityIDs($values_1);
        }
        if (\array_key_exists('jobs', $data)) {
            $values_3 = array();
            foreach ($data['jobs'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\JobOrderTitleModel', 'json', $context);
            }
            $object->setJobs($values_3);
        }
        if (\array_key_exists('candidates', $data)) {
            $values_4 = array();
            foreach ($data['candidates'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Varspool\\JobAdder\\V2\\Model\\CandidateNameModel', 'json', $context);
            }
            $object->setCandidates($values_4);
        }
        if (\array_key_exists('applications', $data)) {
            $values_5 = array();
            foreach ($data['applications'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSummaryModel', 'json', $context);
            }
            $object->setApplications($values_5);
        }
        if (\array_key_exists('placements', $data)) {
            $values_6 = array();
            foreach ($data['placements'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Varspool\\JobAdder\\V2\\Model\\PlacementSummaryModel', 'json', $context);
            }
            $object->setPlacements($values_6);
        }
        if (\array_key_exists('companies', $data)) {
            $values_7 = array();
            foreach ($data['companies'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context);
            }
            $object->setCompanies($values_7);
        }
        if (\array_key_exists('contacts', $data)) {
            $values_8 = array();
            foreach ($data['contacts'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context);
            }
            $object->setContacts($values_8);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['updatedAt']));
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\FolderLinks', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['folderId'] = $object->getFolderId();
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if ($object->isInitialized('sharedWith') && null !== $object->getSharedWith()) {
            $values = array();
            foreach ($object->getSharedWith() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sharedWith'] = $values;
        }
        if ($object->isInitialized('jobs') && null !== $object->getJobs()) {
            $values_1 = array();
            foreach ($object->getJobs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['jobs'] = $values_1;
        }
        if ($object->isInitialized('candidates') && null !== $object->getCandidates()) {
            $values_2 = array();
            foreach ($object->getCandidates() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['candidates'] = $values_2;
        }
        if ($object->isInitialized('applications') && null !== $object->getApplications()) {
            $values_3 = array();
            foreach ($object->getApplications() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['applications'] = $values_3;
        }
        if ($object->isInitialized('placements') && null !== $object->getPlacements()) {
            $values_4 = array();
            foreach ($object->getPlacements() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['placements'] = $values_4;
        }
        if ($object->isInitialized('companies') && null !== $object->getCompanies()) {
            $values_5 = array();
            foreach ($object->getCompanies() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['companies'] = $values_5;
        }
        if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
            $values_6 = array();
            foreach ($object->getContacts() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['contacts'] = $values_6;
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}