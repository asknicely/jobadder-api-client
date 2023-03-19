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
class PartnerActionStageModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PartnerActionStageModel();
        if (property_exists($data, 'actionId')) {
            $object->setActionId($data->{'actionId'});
        }
        if (property_exists($data, 'actionName')) {
            $object->setActionName($data->{'actionName'});
        }
        if (property_exists($data, 'reference')) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'stage')) {
            $object->setStage($data->{'stage'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'result')) {
            $object->setResult($this->denormalizer->denormalize($data->{'result'}, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionResultModel', 'json', $context));
        }
        if (property_exists($data, 'submittedAt')) {
            $object->setSubmittedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'submittedAt'}));
        }
        if (property_exists($data, 'submittedBy')) {
            $object->setSubmittedBy($this->denormalizer->denormalize($data->{'submittedBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'updatedAt'}));
        }
        if (property_exists($data, 'updatedBy')) {
            $object->setUpdatedBy($this->denormalizer->denormalize($data->{'updatedBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getActionId()) {
            $data->{'actionId'} = $object->getActionId();
        }
        if (null !== $object->getActionName()) {
            $data->{'actionName'} = $object->getActionName();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getStage()) {
            $data->{'stage'} = $object->getStage();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getResult()) {
            $data->{'result'} = $this->normalizer->normalize($object->getResult(), 'json', $context);
        }
        if (null !== $object->getSubmittedAt()) {
            $data->{'submittedAt'} = $object->getSubmittedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getSubmittedBy()) {
            $data->{'submittedBy'} = $this->normalizer->normalize($object->getSubmittedBy(), 'json', $context);
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getUpdatedBy()) {
            $data->{'updatedBy'} = $this->normalizer->normalize($object->getUpdatedBy(), 'json', $context);
        }
        return $data;
    }
}