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
class JobOrderUserTaskModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobOrderUserTaskModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobOrderUserTaskModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobOrderUserTaskModel();
        if (property_exists($data, 'taskId')) {
            $object->setTaskId($data->{'taskId'});
        }
        if (property_exists($data, 'text')) {
            $object->setText($data->{'text'});
        }
        if (property_exists($data, 'startAt')) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'startAt'}));
        }
        if (property_exists($data, 'endAt')) {
            $object->setEndAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'endAt'}));
        }
        if (property_exists($data, 'allDay')) {
            $object->setAllDay($data->{'allDay'});
        }
        if (property_exists($data, 'reminderMinutes')) {
            $object->setReminderMinutes($data->{'reminderMinutes'});
        }
        if (property_exists($data, 'complete')) {
            $object->setComplete($data->{'complete'});
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'assignedTo')) {
            $object->setAssignedTo($this->denormalizer->denormalize($data->{'assignedTo'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'assignees')) {
            $values = array();
            foreach ($data->{'assignees'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setAssignees($values);
        }
        if (property_exists($data, 'jobs')) {
            $values_1 = array();
            foreach ($data->{'jobs'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\JobOrderTitleModel', 'json', $context);
            }
            $object->setJobs($values_1);
        }
        if (property_exists($data, 'requisitions')) {
            $values_2 = array();
            foreach ($data->{'requisitions'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\RequisitionSummaryModel', 'json', $context);
            }
            $object->setRequisitions($values_2);
        }
        if (property_exists($data, 'candidates')) {
            $values_3 = array();
            foreach ($data->{'candidates'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\CandidateNameModel', 'json', $context);
            }
            $object->setCandidates($values_3);
        }
        if (property_exists($data, 'applications')) {
            $values_4 = array();
            foreach ($data->{'applications'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSummaryModel', 'json', $context);
            }
            $object->setApplications($values_4);
        }
        if (property_exists($data, 'placements')) {
            $values_5 = array();
            foreach ($data->{'placements'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Varspool\\JobAdder\\V2\\Model\\PlacementSummaryModel', 'json', $context);
            }
            $object->setPlacements($values_5);
        }
        if (property_exists($data, 'companies')) {
            $values_6 = array();
            foreach ($data->{'companies'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context);
            }
            $object->setCompanies($values_6);
        }
        if (property_exists($data, 'contacts')) {
            $values_7 = array();
            foreach ($data->{'contacts'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context);
            }
            $object->setContacts($values_7);
        }
        if (property_exists($data, 'jobId')) {
            $object->setJobId($data->{'jobId'});
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($this->denormalizer->denormalize($data->{'createdBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedBy')) {
            $object->setUpdatedBy($this->denormalizer->denormalize($data->{'updatedBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'updatedAt'}));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTaskId()) {
            $data->{'taskId'} = $object->getTaskId();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getStartAt()) {
            $data->{'startAt'} = $object->getStartAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getEndAt()) {
            $data->{'endAt'} = $object->getEndAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getAllDay()) {
            $data->{'allDay'} = $object->getAllDay();
        }
        if (null !== $object->getReminderMinutes()) {
            $data->{'reminderMinutes'} = $object->getReminderMinutes();
        }
        if (null !== $object->getComplete()) {
            $data->{'complete'} = $object->getComplete();
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getAssignedTo()) {
            $data->{'assignedTo'} = $this->normalizer->normalize($object->getAssignedTo(), 'json', $context);
        }
        if (null !== $object->getAssignees()) {
            $values = array();
            foreach ($object->getAssignees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'assignees'} = $values;
        }
        if (null !== $object->getJobs()) {
            $values_1 = array();
            foreach ($object->getJobs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'jobs'} = $values_1;
        }
        if (null !== $object->getRequisitions()) {
            $values_2 = array();
            foreach ($object->getRequisitions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'requisitions'} = $values_2;
        }
        if (null !== $object->getCandidates()) {
            $values_3 = array();
            foreach ($object->getCandidates() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'candidates'} = $values_3;
        }
        if (null !== $object->getApplications()) {
            $values_4 = array();
            foreach ($object->getApplications() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'applications'} = $values_4;
        }
        if (null !== $object->getPlacements()) {
            $values_5 = array();
            foreach ($object->getPlacements() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'placements'} = $values_5;
        }
        if (null !== $object->getCompanies()) {
            $values_6 = array();
            foreach ($object->getCompanies() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'companies'} = $values_6;
        }
        if (null !== $object->getContacts()) {
            $values_7 = array();
            foreach ($object->getContacts() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'contacts'} = $values_7;
        }
        if (null !== $object->getJobId()) {
            $data->{'jobId'} = $object->getJobId();
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getUpdatedBy()) {
            $data->{'updatedBy'} = $this->normalizer->normalize($object->getUpdatedBy(), 'json', $context);
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}