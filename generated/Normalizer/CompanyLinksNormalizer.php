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
class CompanyLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\CompanyLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\CompanyLinks';
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
        $object = new \Varspool\JobAdder\V2\Model\CompanyLinks();
        if (property_exists($data, 'self')) {
            $object->setSelf($data->{'self'});
        }
        if (property_exists($data, 'logo')) {
            $object->setLogo($data->{'logo'});
        }
        if (property_exists($data, 'contacts')) {
            $object->setContacts($data->{'contacts'});
        }
        if (property_exists($data, 'subsidiaries')) {
            $object->setSubsidiaries($data->{'subsidiaries'});
        }
        if (property_exists($data, 'addresses')) {
            $object->setAddresses($data->{'addresses'});
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
        if (property_exists($data, 'requisitions')) {
            $object->setRequisitions($data->{'requisitions'});
        }
        if (property_exists($data, 'floats')) {
            $object->setFloats($data->{'floats'});
        }
        if (property_exists($data, 'submissions')) {
            $object->setSubmissions($data->{'submissions'});
        }
        if (property_exists($data, 'placements')) {
            $object->setPlacements($data->{'placements'});
        }
        if (property_exists($data, 'workflows')) {
            $object->setWorkflows($this->denormalizer->denormalize($data->{'workflows'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyWorkflowLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSelf()) {
            $data->{'self'} = $object->getSelf();
        }
        if (null !== $object->getLogo()) {
            $data->{'logo'} = $object->getLogo();
        }
        if (null !== $object->getContacts()) {
            $data->{'contacts'} = $object->getContacts();
        }
        if (null !== $object->getSubsidiaries()) {
            $data->{'subsidiaries'} = $object->getSubsidiaries();
        }
        if (null !== $object->getAddresses()) {
            $data->{'addresses'} = $object->getAddresses();
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
        if (null !== $object->getRequisitions()) {
            $data->{'requisitions'} = $object->getRequisitions();
        }
        if (null !== $object->getFloats()) {
            $data->{'floats'} = $object->getFloats();
        }
        if (null !== $object->getSubmissions()) {
            $data->{'submissions'} = $object->getSubmissions();
        }
        if (null !== $object->getPlacements()) {
            $data->{'placements'} = $object->getPlacements();
        }
        if (null !== $object->getWorkflows()) {
            $data->{'workflows'} = $this->normalizer->normalize($object->getWorkflows(), 'json', $context);
        }
        return $data;
    }
}