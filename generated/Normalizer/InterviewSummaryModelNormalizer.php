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
class InterviewSummaryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\InterviewSummaryModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\InterviewSummaryModel';
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
        $object = new \Varspool\JobAdder\V2\Model\InterviewSummaryModel();
        if (property_exists($data, 'interviewId')) {
            $object->setInterviewId($data->{'interviewId'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'startAt')) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'startAt'}));
        }
        if (property_exists($data, 'endAt')) {
            $object->setEndAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'endAt'}));
        }
        if (property_exists($data, 'location')) {
            $object->setLocation($data->{'location'});
        }
        if (property_exists($data, 'interviewee')) {
            $object->setInterviewee($this->denormalizer->denormalize($data->{'interviewee'}, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSummaryModel', 'json', $context));
        }
        if (property_exists($data, 'interviewers')) {
            $object->setInterviewers($this->denormalizer->denormalize($data->{'interviewers'}, 'Varspool\\JobAdder\\V2\\Model\\InterviewInterviewersModel', 'json', $context));
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($this->denormalizer->denormalize($data->{'createdBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'createdAt'}));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getInterviewId()) {
            $data->{'interviewId'} = $object->getInterviewId();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getStartAt()) {
            $data->{'startAt'} = $object->getStartAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getEndAt()) {
            $data->{'endAt'} = $object->getEndAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $object->getLocation();
        }
        if (null !== $object->getInterviewee()) {
            $data->{'interviewee'} = $this->normalizer->normalize($object->getInterviewee(), 'json', $context);
        }
        if (null !== $object->getInterviewers()) {
            $data->{'interviewers'} = $this->normalizer->normalize($object->getInterviewers(), 'json', $context);
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}