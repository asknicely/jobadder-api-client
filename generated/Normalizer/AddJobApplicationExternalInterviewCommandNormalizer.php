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
class AddJobApplicationExternalInterviewCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\AddJobApplicationExternalInterviewCommand';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\AddJobApplicationExternalInterviewCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\AddJobApplicationExternalInterviewCommand();
        if (property_exists($data, 'startAt')) {
            $object->setStartAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'startAt'}));
        }
        if (property_exists($data, 'endAt')) {
            $object->setEndAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'endAt'}));
        }
        if (property_exists($data, 'location')) {
            $object->setLocation($data->{'location'});
        }
        if (property_exists($data, 'interviewersContactIds')) {
            $values = array();
            foreach ($data->{'interviewersContactIds'} as $value) {
                $values[] = $value;
            }
            $object->setInterviewersContactIds($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStartAt()) {
            $data->{'startAt'} = $object->getStartAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getEndAt()) {
            $data->{'endAt'} = $object->getEndAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $object->getLocation();
        }
        if (null !== $object->getInterviewersContactIds()) {
            $values = array();
            foreach ($object->getInterviewersContactIds() as $value) {
                $values[] = $value;
            }
            $data->{'interviewersContactIds'} = $values;
        }
        return $data;
    }
}