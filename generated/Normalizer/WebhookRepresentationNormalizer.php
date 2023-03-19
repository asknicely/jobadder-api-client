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
class WebhookRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\WebhookRepresentation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\WebhookRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\WebhookRepresentation();
        if (property_exists($data, 'webhookId')) {
            $object->setWebhookId($data->{'webhookId'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }
        if (property_exists($data, 'events')) {
            $values = array();
            foreach ($data->{'events'} as $value) {
                $values[] = $value;
            }
            $object->setEvents($values);
        }
        if (property_exists($data, 'eventFilters')) {
            $object->setEventFilters($this->denormalizer->denormalize($data->{'eventFilters'}, 'Varspool\\JobAdder\\V2\\Model\\WebhookEventFilterModel', 'json', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'updatedAt'}));
        }
        if (property_exists($data, 'enabledAt')) {
            $object->setEnabledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'enabledAt'}));
        }
        if (property_exists($data, 'disabledAt')) {
            $object->setDisabledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'disabledAt'}));
        }
        if (property_exists($data, 'suspendedAt')) {
            $object->setSuspendedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'suspendedAt'}));
        }
        if (property_exists($data, 'failedAt')) {
            $object->setFailedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'failedAt'}));
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\ModelLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getWebhookId()) {
            $data->{'webhookId'} = $object->getWebhookId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getEventFilters()) {
            $data->{'eventFilters'} = $this->normalizer->normalize($object->getEventFilters(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getEnabledAt()) {
            $data->{'enabledAt'} = $object->getEnabledAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getDisabledAt()) {
            $data->{'disabledAt'} = $object->getDisabledAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getSuspendedAt()) {
            $data->{'suspendedAt'} = $object->getSuspendedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getFailedAt()) {
            $data->{'failedAt'} = $object->getFailedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}