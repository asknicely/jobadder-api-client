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
class NoteRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\NoteRepresentation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\NoteRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\NoteRepresentation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('noteId', $data)) {
            $object->setNoteId($data['noteId']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (\array_key_exists('readonly', $data)) {
            $object->setReadonly($data['readonly']);
        }
        if (\array_key_exists('attachments', $data)) {
            $values = array();
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\NoteAttachmentModel', 'json', $context);
            }
            $object->setAttachments($values);
        }
        if (\array_key_exists('jobs', $data)) {
            $values_1 = array();
            foreach ($data['jobs'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\JobOrderTitleModel', 'json', $context);
            }
            $object->setJobs($values_1);
        }
        if (\array_key_exists('requisitions', $data)) {
            $values_2 = array();
            foreach ($data['requisitions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\RequisitionSummaryModel', 'json', $context);
            }
            $object->setRequisitions($values_2);
        }
        if (\array_key_exists('candidates', $data)) {
            $values_3 = array();
            foreach ($data['candidates'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\CandidateNameModel', 'json', $context);
            }
            $object->setCandidates($values_3);
        }
        if (\array_key_exists('applications', $data)) {
            $values_4 = array();
            foreach ($data['applications'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSummaryModel', 'json', $context);
            }
            $object->setApplications($values_4);
        }
        if (\array_key_exists('placements', $data)) {
            $values_5 = array();
            foreach ($data['placements'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Varspool\\JobAdder\\V2\\Model\\PlacementSummaryModel', 'json', $context);
            }
            $object->setPlacements($values_5);
        }
        if (\array_key_exists('companies', $data)) {
            $values_6 = array();
            foreach ($data['companies'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context);
            }
            $object->setCompanies($values_6);
        }
        if (\array_key_exists('contacts', $data)) {
            $values_7 = array();
            foreach ($data['contacts'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context);
            }
            $object->setContacts($values_7);
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['createdBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\NoteLinks', 'json', $context));
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        if (\array_key_exists('updatedBy', $data)) {
            $object->setUpdatedBy($this->denormalizer->denormalize($data['updatedBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['updatedAt']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['noteId'] = $object->getNoteId();
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('text') && null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if ($object->isInitialized('readonly') && null !== $object->getReadonly()) {
            $data['readonly'] = $object->getReadonly();
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $values = array();
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['attachments'] = $values;
        }
        if ($object->isInitialized('jobs') && null !== $object->getJobs()) {
            $values_1 = array();
            foreach ($object->getJobs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['jobs'] = $values_1;
        }
        if ($object->isInitialized('requisitions') && null !== $object->getRequisitions()) {
            $values_2 = array();
            foreach ($object->getRequisitions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['requisitions'] = $values_2;
        }
        if ($object->isInitialized('candidates') && null !== $object->getCandidates()) {
            $values_3 = array();
            foreach ($object->getCandidates() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['candidates'] = $values_3;
        }
        if ($object->isInitialized('applications') && null !== $object->getApplications()) {
            $values_4 = array();
            foreach ($object->getApplications() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['applications'] = $values_4;
        }
        if ($object->isInitialized('placements') && null !== $object->getPlacements()) {
            $values_5 = array();
            foreach ($object->getPlacements() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['placements'] = $values_5;
        }
        if ($object->isInitialized('companies') && null !== $object->getCompanies()) {
            $values_6 = array();
            foreach ($object->getCompanies() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['companies'] = $values_6;
        }
        if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
            $values_7 = array();
            foreach ($object->getContacts() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['contacts'] = $values_7;
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['createdBy'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('updatedBy') && null !== $object->getUpdatedBy()) {
            $data['updatedBy'] = $this->normalizer->normalize($object->getUpdatedBy(), 'json', $context);
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}