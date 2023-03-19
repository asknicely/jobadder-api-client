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
class ContactLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\ContactLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\ContactLinks';
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
        $object = new \Varspool\JobAdder\V2\Model\ContactLinks();
        if (property_exists($data, 'self')) {
            $object->setSelf($data->{'self'});
        }
        if (property_exists($data, 'candidate')) {
            $object->setCandidate($data->{'candidate'});
        }
        if (property_exists($data, 'photo')) {
            $object->setPhoto($data->{'photo'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($data->{'company'});
        }
        if (property_exists($data, 'officeAddress')) {
            $object->setOfficeAddress($data->{'officeAddress'});
        }
        if (property_exists($data, 'skills')) {
            $object->setSkills($data->{'skills'});
        }
        if (property_exists($data, 'notes')) {
            $object->setNotes($data->{'notes'});
        }
        if (property_exists($data, 'attachments')) {
            $object->setAttachments($data->{'attachments'});
        }
        if (property_exists($data, 'jobs')) {
            $object->setJobs($data->{'jobs'});
        }
        if (property_exists($data, 'floats')) {
            $object->setFloats($data->{'floats'});
        }
        if (property_exists($data, 'submissions')) {
            $object->setSubmissions($data->{'submissions'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSelf()) {
            $data->{'self'} = $object->getSelf();
        }
        if (null !== $object->getCandidate()) {
            $data->{'candidate'} = $object->getCandidate();
        }
        if (null !== $object->getPhoto()) {
            $data->{'photo'} = $object->getPhoto();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $object->getCompany();
        }
        if (null !== $object->getOfficeAddress()) {
            $data->{'officeAddress'} = $object->getOfficeAddress();
        }
        if (null !== $object->getSkills()) {
            $data->{'skills'} = $object->getSkills();
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        if (null !== $object->getAttachments()) {
            $data->{'attachments'} = $object->getAttachments();
        }
        if (null !== $object->getJobs()) {
            $data->{'jobs'} = $object->getJobs();
        }
        if (null !== $object->getFloats()) {
            $data->{'floats'} = $object->getFloats();
        }
        if (null !== $object->getSubmissions()) {
            $data->{'submissions'} = $object->getSubmissions();
        }
        return $data;
    }
}