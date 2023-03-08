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
class AddPlacementUserTaskCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\AddPlacementUserTaskCommand';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\AddPlacementUserTaskCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\AddPlacementUserTaskCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
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
        if (\array_key_exists('assignees', $data)) {
            $values = array();
            foreach ($data['assignees'] as $value) {
                $values[] = $value;
            }
            $object->setAssignees($values);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('candidates', $data)) {
            $values_1 = array();
            foreach ($data['candidates'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCandidates($values_1);
        }
        if (\array_key_exists('jobs', $data)) {
            $values_2 = array();
            foreach ($data['jobs'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setJobs($values_2);
        }
        if (\array_key_exists('placements', $data)) {
            $values_3 = array();
            foreach ($data['placements'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPlacements($values_3);
        }
        if (\array_key_exists('companies', $data)) {
            $values_4 = array();
            foreach ($data['companies'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setCompanies($values_4);
        }
        if (\array_key_exists('contacts', $data)) {
            $values_5 = array();
            foreach ($data['contacts'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setContacts($values_5);
        }
        if (\array_key_exists('applications', $data)) {
            $values_6 = array();
            foreach ($data['applications'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setApplications($values_6);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['title'] = $object->getTitle();
        if ($object->isInitialized('startAt') && null !== $object->getStartAt()) {
            $data['startAt'] = $object->getStartAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('endAt') && null !== $object->getEndAt()) {
            $data['endAt'] = $object->getEndAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('allDay') && null !== $object->getAllDay()) {
            $data['allDay'] = $object->getAllDay();
        }
        $values = array();
        foreach ($object->getAssignees() as $value) {
            $values[] = $value;
        }
        $data['assignees'] = $values;
        if ($object->isInitialized('priority') && null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if ($object->isInitialized('candidates') && null !== $object->getCandidates()) {
            $values_1 = array();
            foreach ($object->getCandidates() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['candidates'] = $values_1;
        }
        if ($object->isInitialized('jobs') && null !== $object->getJobs()) {
            $values_2 = array();
            foreach ($object->getJobs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['jobs'] = $values_2;
        }
        if ($object->isInitialized('placements') && null !== $object->getPlacements()) {
            $values_3 = array();
            foreach ($object->getPlacements() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['placements'] = $values_3;
        }
        if ($object->isInitialized('companies') && null !== $object->getCompanies()) {
            $values_4 = array();
            foreach ($object->getCompanies() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['companies'] = $values_4;
        }
        if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
            $values_5 = array();
            foreach ($object->getContacts() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['contacts'] = $values_5;
        }
        if ($object->isInitialized('applications') && null !== $object->getApplications()) {
            $values_6 = array();
            foreach ($object->getApplications() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['applications'] = $values_6;
        }
        return $data;
    }
}