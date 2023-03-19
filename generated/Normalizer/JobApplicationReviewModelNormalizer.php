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
class JobApplicationReviewModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationReviewModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationReviewModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobApplicationReviewModel();
        if (property_exists($data, 'stage')) {
            $object->setStage($data->{'stage'});
        }
        if (property_exists($data, 'submittedAt')) {
            $object->setSubmittedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'submittedAt'}));
        }
        if (property_exists($data, 'submittedBy')) {
            $object->setSubmittedBy($this->denormalizer->denormalize($data->{'submittedBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'reviewedAt')) {
            $object->setReviewedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'reviewedAt'}));
        }
        if (property_exists($data, 'reviewedBy')) {
            $object->setReviewedBy($this->denormalizer->denormalize($data->{'reviewedBy'}, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStage()) {
            $data->{'stage'} = $object->getStage();
        }
        if (null !== $object->getSubmittedAt()) {
            $data->{'submittedAt'} = $object->getSubmittedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getSubmittedBy()) {
            $data->{'submittedBy'} = $this->normalizer->normalize($object->getSubmittedBy(), 'json', $context);
        }
        if (null !== $object->getReviewedAt()) {
            $data->{'reviewedAt'} = $object->getReviewedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getReviewedBy()) {
            $data->{'reviewedBy'} = $this->normalizer->normalize($object->getReviewedBy(), 'json', $context);
        }
        return $data;
    }
}