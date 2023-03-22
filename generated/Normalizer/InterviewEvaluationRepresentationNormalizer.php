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
class InterviewEvaluationRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\InterviewEvaluationRepresentation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\InterviewEvaluationRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\InterviewEvaluationRepresentation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (\array_key_exists('expiresAt', $data)) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['expiresAt']));
        }
        if (\array_key_exists('hasReplied', $data)) {
            $object->setHasReplied($data['hasReplied']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }
        if (\array_key_exists('rating', $data)) {
            $values = array();
            foreach ($data['rating'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\InterviewEvaluationRatingModel', 'json', $context);
            }
            $object->setRating($values);
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\ModelLinks', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('user') && null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
            $data['expiresAt'] = $object->getExpiresAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('hasReplied') && null !== $object->getHasReplied()) {
            $data['hasReplied'] = $object->getHasReplied();
        }
        if ($object->isInitialized('comments') && null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if ($object->isInitialized('rating') && null !== $object->getRating()) {
            $values = array();
            foreach ($object->getRating() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['rating'] = $values;
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}