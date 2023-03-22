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
class WebhookModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\WebhookModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\WebhookModel';
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
        $object = new \Varspool\JobAdder\V2\Model\WebhookModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('webhookId', $data)) {
            $object->setWebhookId($data['webhookId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('events', $data)) {
            $values = array();
            foreach ($data['events'] as $value) {
                $values[] = $value;
            }
            $object->setEvents($values);
        }
        if (\array_key_exists('eventFilters', $data)) {
            $object->setEventFilters($this->denormalizer->denormalize($data['eventFilters'], 'Varspool\\JobAdder\\V2\\Model\\WebhookEventFilterModel', 'json', $context));
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['updatedAt']));
        }
        if (\array_key_exists('enabledAt', $data)) {
            $object->setEnabledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['enabledAt']));
        }
        if (\array_key_exists('disabledAt', $data)) {
            $object->setDisabledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['disabledAt']));
        }
        if (\array_key_exists('suspendedAt', $data)) {
            $object->setSuspendedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['suspendedAt']));
        }
        if (\array_key_exists('failedAt', $data)) {
            $object->setFailedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['failedAt']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('webhookId') && null !== $object->getWebhookId()) {
            $data['webhookId'] = $object->getWebhookId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('eventFilters') && null !== $object->getEventFilters()) {
            $data['eventFilters'] = $this->normalizer->normalize($object->getEventFilters(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('enabledAt') && null !== $object->getEnabledAt()) {
            $data['enabledAt'] = $object->getEnabledAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('disabledAt') && null !== $object->getDisabledAt()) {
            $data['disabledAt'] = $object->getDisabledAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('suspendedAt') && null !== $object->getSuspendedAt()) {
            $data['suspendedAt'] = $object->getSuspendedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('failedAt') && null !== $object->getFailedAt()) {
            $data['failedAt'] = $object->getFailedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}