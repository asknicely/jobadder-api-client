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
class InterviewEvaluationRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\InterviewEvaluationRepresentation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\InterviewEvaluationRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\InterviewEvaluationRepresentation();
        if (property_exists($data, 'user')) {
            $object->setUser($this->denormalizer->denormalize($data->{'user'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'contact')) {
            $object->setContact($this->denormalizer->denormalize($data->{'contact'}, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (property_exists($data, 'expiresAt')) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'expiresAt'}));
        }
        if (property_exists($data, 'hasReplied')) {
            $object->setHasReplied($data->{'hasReplied'});
        }
        if (property_exists($data, 'comments')) {
            $object->setComments($data->{'comments'});
        }
        if (property_exists($data, 'rating')) {
            $values = array();
            foreach ($data->{'rating'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\InterviewEvaluationRatingModel', 'json', $context);
            }
            $object->setRating($values);
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\ModelLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getUser()) {
            $data->{'user'} = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if (null !== $object->getExpiresAt()) {
            $data->{'expiresAt'} = $object->getExpiresAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getHasReplied()) {
            $data->{'hasReplied'} = $object->getHasReplied();
        }
        if (null !== $object->getComments()) {
            $data->{'comments'} = $object->getComments();
        }
        if (null !== $object->getRating()) {
            $values = array();
            foreach ($object->getRating() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'rating'} = $values;
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}