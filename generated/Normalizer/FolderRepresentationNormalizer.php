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
class FolderRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\FolderRepresentation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\FolderRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\FolderRepresentation();
        if (property_exists($data, 'folderId')) {
            $object->setFolderId($data->{'folderId'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'sharedWith')) {
            $values = array();
            foreach ($data->{'sharedWith'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setSharedWith($values);
        }
        if (property_exists($data, 'entityIDs')) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'entityIDs'} as $key => $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[$key] = $values_2;
            }
            $object->setEntityIDs($values_1);
        }
        if (property_exists($data, 'jobs')) {
            $values_3 = array();
            foreach ($data->{'jobs'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\JobOrderTitleModel', 'json', $context);
            }
            $object->setJobs($values_3);
        }
        if (property_exists($data, 'candidates')) {
            $values_4 = array();
            foreach ($data->{'candidates'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Varspool\\JobAdder\\V2\\Model\\CandidateNameModel', 'json', $context);
            }
            $object->setCandidates($values_4);
        }
        if (property_exists($data, 'applications')) {
            $values_5 = array();
            foreach ($data->{'applications'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSummaryModel', 'json', $context);
            }
            $object->setApplications($values_5);
        }
        if (property_exists($data, 'placements')) {
            $values_6 = array();
            foreach ($data->{'placements'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Varspool\\JobAdder\\V2\\Model\\PlacementSummaryModel', 'json', $context);
            }
            $object->setPlacements($values_6);
        }
        if (property_exists($data, 'companies')) {
            $values_7 = array();
            foreach ($data->{'companies'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context);
            }
            $object->setCompanies($values_7);
        }
        if (property_exists($data, 'contacts')) {
            $values_8 = array();
            foreach ($data->{'contacts'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context);
            }
            $object->setContacts($values_8);
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'updatedAt'}));
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\FolderLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFolderId()) {
            $data->{'folderId'} = $object->getFolderId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getSharedWith()) {
            $values = array();
            foreach ($object->getSharedWith() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'sharedWith'} = $values;
        }
        if (null !== $object->getJobs()) {
            $values_1 = array();
            foreach ($object->getJobs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'jobs'} = $values_1;
        }
        if (null !== $object->getCandidates()) {
            $values_2 = array();
            foreach ($object->getCandidates() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'candidates'} = $values_2;
        }
        if (null !== $object->getApplications()) {
            $values_3 = array();
            foreach ($object->getApplications() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'applications'} = $values_3;
        }
        if (null !== $object->getPlacements()) {
            $values_4 = array();
            foreach ($object->getPlacements() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'placements'} = $values_4;
        }
        if (null !== $object->getCompanies()) {
            $values_5 = array();
            foreach ($object->getCompanies() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'companies'} = $values_5;
        }
        if (null !== $object->getContacts()) {
            $values_6 = array();
            foreach ($object->getContacts() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'contacts'} = $values_6;
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}