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
class UserTaskSummaryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\UserTaskSummaryModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\UserTaskSummaryModel';
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
        $object = new \Varspool\JobAdder\V2\Model\UserTaskSummaryModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('taskId', $data)) {
            $object->setTaskId($data['taskId']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('startAt', $data)) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['startAt']));
        }
        if (\array_key_exists('endAt', $data)) {
            $object->setEndAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['endAt']));
        }
        if (\array_key_exists('allDay', $data)) {
            $object->setAllDay($data['allDay']);
        }
        if (\array_key_exists('reminderMinutes', $data)) {
            $object->setReminderMinutes($data['reminderMinutes']);
        }
        if (\array_key_exists('complete', $data)) {
            $object->setComplete($data['complete']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('assignedTo', $data)) {
            $object->setAssignedTo($this->denormalizer->denormalize($data['assignedTo'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('assignees', $data)) {
            $values = array();
            foreach ($data['assignees'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context);
            }
            $object->setAssignees($values);
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['createdBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
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
        if ($object->isInitialized('taskId') && null !== $object->getTaskId()) {
            $data['taskId'] = $object->getTaskId();
        }
        if ($object->isInitialized('text') && null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if ($object->isInitialized('startAt') && null !== $object->getStartAt()) {
            $data['startAt'] = $object->getStartAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('endAt') && null !== $object->getEndAt()) {
            $data['endAt'] = $object->getEndAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('allDay') && null !== $object->getAllDay()) {
            $data['allDay'] = $object->getAllDay();
        }
        if ($object->isInitialized('reminderMinutes') && null !== $object->getReminderMinutes()) {
            $data['reminderMinutes'] = $object->getReminderMinutes();
        }
        if ($object->isInitialized('complete') && null !== $object->getComplete()) {
            $data['complete'] = $object->getComplete();
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if ($object->isInitialized('assignedTo') && null !== $object->getAssignedTo()) {
            $data['assignedTo'] = $this->normalizer->normalize($object->getAssignedTo(), 'json', $context);
        }
        if ($object->isInitialized('assignees') && null !== $object->getAssignees()) {
            $values = array();
            foreach ($object->getAssignees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['assignees'] = $values;
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['createdBy'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
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