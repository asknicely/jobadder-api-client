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
class PartnerActionModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PartnerActionModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PartnerActionModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PartnerActionModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('actionId', $data)) {
            $object->setActionId($data['actionId']);
        }
        if (\array_key_exists('actionType', $data)) {
            $object->setActionType($data['actionType']);
        }
        if (\array_key_exists('actionName', $data)) {
            $object->setActionName($data['actionName']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('urlType', $data)) {
            $object->setUrlType($data['urlType']);
        }
        if (\array_key_exists('allowResubmit', $data)) {
            $object->setAllowResubmit($data['allowResubmit']);
        }
        if (\array_key_exists('actionFilter', $data)) {
            $object->setActionFilter($this->denormalizer->denormalize($data['actionFilter'], 'Varspool\\JobAdder\\V2\\Model\\PartnerActionFilterModel', 'json', $context));
        }
        if (\array_key_exists('webhookData', $data)) {
            $object->setWebhookData($data['webhookData']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['updatedAt']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('actionId') && null !== $object->getActionId()) {
            $data['actionId'] = $object->getActionId();
        }
        if ($object->isInitialized('actionType') && null !== $object->getActionType()) {
            $data['actionType'] = $object->getActionType();
        }
        if ($object->isInitialized('actionName') && null !== $object->getActionName()) {
            $data['actionName'] = $object->getActionName();
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('urlType') && null !== $object->getUrlType()) {
            $data['urlType'] = $object->getUrlType();
        }
        if ($object->isInitialized('allowResubmit') && null !== $object->getAllowResubmit()) {
            $data['allowResubmit'] = $object->getAllowResubmit();
        }
        if ($object->isInitialized('actionFilter') && null !== $object->getActionFilter()) {
            $data['actionFilter'] = $this->normalizer->normalize($object->getActionFilter(), 'json', $context);
        }
        if ($object->isInitialized('webhookData') && null !== $object->getWebhookData()) {
            $data['webhookData'] = $object->getWebhookData();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}