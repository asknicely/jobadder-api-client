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
class CandidateLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CandidateLinks';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CandidateLinks';
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
        $object = new \Varspool\JobAdder\V2\Model\CandidateLinks();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
        }
        if (\array_key_exists('contact', $data)) {
            $object->setContact($data['contact']);
        }
        if (\array_key_exists('photo', $data)) {
            $object->setPhoto($data['photo']);
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
        if (\array_key_exists('videos', $data)) {
            $object->setVideos($data['videos']);
        }
        if (\array_key_exists('floats', $data)) {
            $object->setFloats($data['floats']);
        }
        if (\array_key_exists('submissions', $data)) {
            $object->setSubmissions($data['submissions']);
        }
        if (\array_key_exists('applications', $data)) {
            $object->setApplications($data['applications']);
        }
        if (\array_key_exists('placements', $data)) {
            $object->setPlacements($data['placements']);
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
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $object->getContact();
        }
        if ($object->isInitialized('photo') && null !== $object->getPhoto()) {
            $data['photo'] = $object->getPhoto();
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
        if ($object->isInitialized('videos') && null !== $object->getVideos()) {
            $data['videos'] = $object->getVideos();
        }
        if ($object->isInitialized('floats') && null !== $object->getFloats()) {
            $data['floats'] = $object->getFloats();
        }
        if ($object->isInitialized('submissions') && null !== $object->getSubmissions()) {
            $data['submissions'] = $object->getSubmissions();
        }
        if ($object->isInitialized('applications') && null !== $object->getApplications()) {
            $data['applications'] = $object->getApplications();
        }
        if ($object->isInitialized('placements') && null !== $object->getPlacements()) {
            $data['placements'] = $object->getPlacements();
        }
        return $data;
    }
}