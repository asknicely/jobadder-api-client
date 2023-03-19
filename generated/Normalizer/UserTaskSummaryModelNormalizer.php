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
class UserTaskSummaryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\UserTaskSummaryModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\UserTaskSummaryModel';
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
        $object = new \Varspool\JobAdder\V2\Model\UserTaskSummaryModel();
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