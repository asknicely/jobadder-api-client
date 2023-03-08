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
class UpdatePartnerActionCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\UpdatePartnerActionCommand';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\UpdatePartnerActionCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\UpdatePartnerActionCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['actionName'] = $object->getActionName();
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
        return $data;
    }
}