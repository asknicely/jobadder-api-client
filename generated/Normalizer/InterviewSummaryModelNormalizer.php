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
class InterviewSummaryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\InterviewSummaryModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\InterviewSummaryModel';
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
        $object = new \Varspool\JobAdder\V2\Model\InterviewSummaryModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('interviewId', $data)) {
            $object->setInterviewId($data['interviewId']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('startAt', $data)) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['startAt']));
        }
        if (\array_key_exists('endAt', $data)) {
            $object->setEndAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['endAt']));
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('interviewee', $data)) {
            $object->setInterviewee($this->denormalizer->denormalize($data['interviewee'], 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSummaryModel', 'json', $context));
        }
        if (\array_key_exists('interviewers', $data)) {
            $object->setInterviewers($this->denormalizer->denormalize($data['interviewers'], 'Varspool\\JobAdder\\V2\\Model\\InterviewInterviewersModel', 'json', $context));
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['createdBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['interviewId'] = $object->getInterviewId();
        $data['type'] = $object->getType();
        if ($object->isInitialized('startAt') && null !== $object->getStartAt()) {
            $data['startAt'] = $object->getStartAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('endAt') && null !== $object->getEndAt()) {
            $data['endAt'] = $object->getEndAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('location') && null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        $data['interviewee'] = $this->normalizer->normalize($object->getInterviewee(), 'json', $context);
        if ($object->isInitialized('interviewers') && null !== $object->getInterviewers()) {
            $data['interviewers'] = $this->normalizer->normalize($object->getInterviewers(), 'json', $context);
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['createdBy'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}