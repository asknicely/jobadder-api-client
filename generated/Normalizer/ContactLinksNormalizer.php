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
class ContactLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\ContactLinks';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\ContactLinks';
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
        $object = new \Varspool\JobAdder\V2\Model\ContactLinks();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
        }
        if (\array_key_exists('candidate', $data)) {
            $object->setCandidate($data['candidate']);
        }
        if (\array_key_exists('photo', $data)) {
            $object->setPhoto($data['photo']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
        }
        if (\array_key_exists('officeAddress', $data)) {
            $object->setOfficeAddress($data['officeAddress']);
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
        if (\array_key_exists('floats', $data)) {
            $object->setFloats($data['floats']);
        }
        if (\array_key_exists('submissions', $data)) {
            $object->setSubmissions($data['submissions']);
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
        if ($object->isInitialized('candidate') && null !== $object->getCandidate()) {
            $data['candidate'] = $object->getCandidate();
        }
        if ($object->isInitialized('photo') && null !== $object->getPhoto()) {
            $data['photo'] = $object->getPhoto();
        }
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if ($object->isInitialized('officeAddress') && null !== $object->getOfficeAddress()) {
            $data['officeAddress'] = $object->getOfficeAddress();
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
        if ($object->isInitialized('floats') && null !== $object->getFloats()) {
            $data['floats'] = $object->getFloats();
        }
        if ($object->isInitialized('submissions') && null !== $object->getSubmissions()) {
            $data['submissions'] = $object->getSubmissions();
        }
        return $data;
    }
}