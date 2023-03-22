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
class CompanyLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CompanyLinks';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CompanyLinks';
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
        $object = new \Varspool\JobAdder\V2\Model\CompanyLinks();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
        }
        if (\array_key_exists('logo', $data)) {
            $object->setLogo($data['logo']);
        }
        if (\array_key_exists('contacts', $data)) {
            $object->setContacts($data['contacts']);
        }
        if (\array_key_exists('subsidiaries', $data)) {
            $object->setSubsidiaries($data['subsidiaries']);
        }
        if (\array_key_exists('addresses', $data)) {
            $object->setAddresses($data['addresses']);
        }
        if (\array_key_exists('skills', $data)) {
            $object->setSkills($data['skills']);
        }
        if (\array_key_exists('notes', $data)) {
            $object->setNotes($data['notes']);
        }
        if (\array_key_exists('attachments', $data)) {
            $object->setAttachments($data['attachments']);
        }
        if (\array_key_exists('jobs', $data)) {
            $object->setJobs($data['jobs']);
        }
        if (\array_key_exists('requisitions', $data)) {
            $object->setRequisitions($data['requisitions']);
        }
        if (\array_key_exists('floats', $data)) {
            $object->setFloats($data['floats']);
        }
        if (\array_key_exists('submissions', $data)) {
            $object->setSubmissions($data['submissions']);
        }
        if (\array_key_exists('placements', $data)) {
            $object->setPlacements($data['placements']);
        }
        if (\array_key_exists('workflows', $data)) {
            $object->setWorkflows($this->denormalizer->denormalize($data['workflows'], 'Varspool\\JobAdder\\V2\\Model\\CompanyWorkflowLinks', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('self') && null !== $object->getSelf()) {
            $data['self'] = $object->getSelf();
        }
        if ($object->isInitialized('logo') && null !== $object->getLogo()) {
            $data['logo'] = $object->getLogo();
        }
        if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
            $data['contacts'] = $object->getContacts();
        }
        if ($object->isInitialized('subsidiaries') && null !== $object->getSubsidiaries()) {
            $data['subsidiaries'] = $object->getSubsidiaries();
        }
        if ($object->isInitialized('addresses') && null !== $object->getAddresses()) {
            $data['addresses'] = $object->getAddresses();
        }
        if ($object->isInitialized('skills') && null !== $object->getSkills()) {
            $data['skills'] = $object->getSkills();
        }
        if ($object->isInitialized('notes') && null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $data['attachments'] = $object->getAttachments();
        }
        if ($object->isInitialized('jobs') && null !== $object->getJobs()) {
            $data['jobs'] = $object->getJobs();
        }
        if ($object->isInitialized('requisitions') && null !== $object->getRequisitions()) {
            $data['requisitions'] = $object->getRequisitions();
        }
        if ($object->isInitialized('floats') && null !== $object->getFloats()) {
            $data['floats'] = $object->getFloats();
        }
        if ($object->isInitialized('submissions') && null !== $object->getSubmissions()) {
            $data['submissions'] = $object->getSubmissions();
        }
        if ($object->isInitialized('placements') && null !== $object->getPlacements()) {
            $data['placements'] = $object->getPlacements();
        }
        if ($object->isInitialized('workflows') && null !== $object->getWorkflows()) {
            $data['workflows'] = $this->normalizer->normalize($object->getWorkflows(), 'json', $context);
        }
        return $data;
    }
}