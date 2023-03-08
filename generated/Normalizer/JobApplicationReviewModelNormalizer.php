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
class JobApplicationReviewModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationReviewModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationReviewModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobApplicationReviewModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stage', $data)) {
            $object->setStage($data['stage']);
        }
        if (\array_key_exists('submittedAt', $data)) {
            $object->setSubmittedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['submittedAt']));
        }
        if (\array_key_exists('submittedBy', $data)) {
            $object->setSubmittedBy($this->denormalizer->denormalize($data['submittedBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('reviewedAt', $data)) {
            $object->setReviewedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['reviewedAt']));
        }
        if (\array_key_exists('reviewedBy', $data)) {
            $object->setReviewedBy($this->denormalizer->denormalize($data['reviewedBy'], 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['stage'] = $object->getStage();
        if ($object->isInitialized('submittedAt') && null !== $object->getSubmittedAt()) {
            $data['submittedAt'] = $object->getSubmittedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('submittedBy') && null !== $object->getSubmittedBy()) {
            $data['submittedBy'] = $this->normalizer->normalize($object->getSubmittedBy(), 'json', $context);
        }
        if ($object->isInitialized('reviewedAt') && null !== $object->getReviewedAt()) {
            $data['reviewedAt'] = $object->getReviewedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('reviewedBy') && null !== $object->getReviewedBy()) {
            $data['reviewedBy'] = $this->normalizer->normalize($object->getReviewedBy(), 'json', $context);
        }
        return $data;
    }
}