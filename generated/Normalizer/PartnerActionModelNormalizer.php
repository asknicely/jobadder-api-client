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
class PartnerActionModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PartnerActionModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PartnerActionModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PartnerActionModel();
        if (property_exists($data, 'actionId')) {
            $object->setActionId($data->{'actionId'});
        }
        if (property_exists($data, 'actionType')) {
            $object->setActionType($data->{'actionType'});
        }
        if (property_exists($data, 'actionName')) {
            $object->setActionName($data->{'actionName'});
        }
        if (property_exists($data, 'reference')) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }
        if (property_exists($data, 'urlType')) {
            $object->setUrlType($data->{'urlType'});
        }
        if (property_exists($data, 'allowResubmit')) {
            $object->setAllowResubmit($data->{'allowResubmit'});
        }
        if (property_exists($data, 'actionFilter')) {
            $object->setActionFilter($this->denormalizer->denormalize($data->{'actionFilter'}, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionFilterModel', 'json', $context));
        }
        if (property_exists($data, 'webhookData')) {
            $object->setWebhookData($data->{'webhookData'});
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'updatedAt'}));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getActionId()) {
            $data->{'actionId'} = $object->getActionId();
        }
        if (null !== $object->getActionType()) {
            $data->{'actionType'} = $object->getActionType();
        }
        if (null !== $object->getActionName()) {
            $data->{'actionName'} = $object->getActionName();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getUrlType()) {
            $data->{'urlType'} = $object->getUrlType();
        }
        if (null !== $object->getAllowResubmit()) {
            $data->{'allowResubmit'} = $object->getAllowResubmit();
        }
        if (null !== $object->getActionFilter()) {
            $data->{'actionFilter'} = $this->normalizer->normalize($object->getActionFilter(), 'json', $context);
        }
        if (null !== $object->getWebhookData()) {
            $data->{'webhookData'} = $object->getWebhookData();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}