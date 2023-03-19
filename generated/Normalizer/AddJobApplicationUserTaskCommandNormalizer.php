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
class AddJobApplicationUserTaskCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\AddJobApplicationUserTaskCommand';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\AddJobApplicationUserTaskCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\AddJobApplicationUserTaskCommand();
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
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
        if (property_exists($data, 'assignees')) {
            $values = array();
            foreach ($data->{'assignees'} as $value) {
                $values[] = $value;
            }
            $object->setAssignees($values);
        }
        if (property_exists($data, 'priority')) {
            $object->setPriority($data->{'priority'});
        }
        if (property_exists($data, 'candidates')) {
            $values_1 = array();
            foreach ($data->{'candidates'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCandidates($values_1);
        }
        if (property_exists($data, 'jobs')) {
            $values_2 = array();
            foreach ($data->{'jobs'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setJobs($values_2);
        }
        if (property_exists($data, 'placements')) {
            $values_3 = array();
            foreach ($data->{'placements'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPlacements($values_3);
        }
        if (property_exists($data, 'companies')) {
            $values_4 = array();
            foreach ($data->{'companies'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setCompanies($values_4);
        }
        if (property_exists($data, 'contacts')) {
            $values_5 = array();
            foreach ($data->{'contacts'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setContacts($values_5);
        }
        if (property_exists($data, 'applications')) {
            $values_6 = array();
            foreach ($data->{'applications'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setApplications($values_6);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
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
        if (null !== $object->getAssignees()) {
            $values = array();
            foreach ($object->getAssignees() as $value) {
                $values[] = $value;
            }
            $data->{'assignees'} = $values;
        }
        if (null !== $object->getPriority()) {
            $data->{'priority'} = $object->getPriority();
        }
        if (null !== $object->getCandidates()) {
            $values_1 = array();
            foreach ($object->getCandidates() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'candidates'} = $values_1;
        }
        if (null !== $object->getJobs()) {
            $values_2 = array();
            foreach ($object->getJobs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'jobs'} = $values_2;
        }
        if (null !== $object->getPlacements()) {
            $values_3 = array();
            foreach ($object->getPlacements() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'placements'} = $values_3;
        }
        if (null !== $object->getCompanies()) {
            $values_4 = array();
            foreach ($object->getCompanies() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'companies'} = $values_4;
        }
        if (null !== $object->getContacts()) {
            $values_5 = array();
            foreach ($object->getContacts() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'contacts'} = $values_5;
        }
        if (null !== $object->getApplications()) {
            $values_6 = array();
            foreach ($object->getApplications() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'applications'} = $values_6;
        }
        return $data;
    }
}