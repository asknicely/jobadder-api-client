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
class JobBoardJobAdSummaryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobBoardJobAdSummaryModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobBoardJobAdSummaryModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobBoardJobAdSummaryModel();
        if (property_exists($data, 'adId')) {
            $object->setAdId($data->{'adId'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'reference')) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'summary')) {
            $object->setSummary($data->{'summary'});
        }
        if (property_exists($data, 'bulletPoints')) {
            $values = array();
            foreach ($data->{'bulletPoints'} as $value) {
                $values[] = $value;
            }
            $object->setBulletPoints($values);
        }
        if (property_exists($data, 'portal')) {
            $object->setPortal($this->denormalizer->denormalize($data->{'portal'}, 'Varspool\\JobAdder\\V2\\Model\\JobAdPortalSummaryModel', 'json', $context));
        }
        if (property_exists($data, 'postedAt')) {
            $object->setPostedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'postedAt'}));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'updatedAt'}));
        }
        if (property_exists($data, 'expiresAt')) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'expiresAt'}));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAdId()) {
            $data->{'adId'} = $object->getAdId();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getSummary()) {
            $data->{'summary'} = $object->getSummary();
        }
        if (null !== $object->getBulletPoints()) {
            $values = array();
            foreach ($object->getBulletPoints() as $value) {
                $values[] = $value;
            }
            $data->{'bulletPoints'} = $values;
        }
        if (null !== $object->getPortal()) {
            $data->{'portal'} = $this->normalizer->normalize($object->getPortal(), 'json', $context);
        }
        if (null !== $object->getPostedAt()) {
            $data->{'postedAt'} = $object->getPostedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getExpiresAt()) {
            $data->{'expiresAt'} = $object->getExpiresAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}