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
class PlacementTimesheetModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementTimesheetModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementTimesheetModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementTimesheetModel();
        if (property_exists($data, 'period')) {
            $object->setPeriod($this->denormalizer->denormalize($data->{'period'}, 'Varspool\\JobAdder\\V2\\Model\\DateRangeModel', 'json', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'createdAt'}));
        }
        if (property_exists($data, 'submittedAt')) {
            $object->setSubmittedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'submittedAt'}));
        }
        if (property_exists($data, 'approvedAt')) {
            $object->setApprovedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'approvedAt'}));
        }
        if (property_exists($data, 'approvedBy')) {
            $object->setApprovedBy($this->denormalizer->denormalize($data->{'approvedBy'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementTimesheetApproverModel', 'json', $context));
        }
        if (property_exists($data, 'entries')) {
            $values = array();
            foreach ($data->{'entries'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\PlacementTimesheetEntryModel', 'json', $context);
            }
            $object->setEntries($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPeriod()) {
            $data->{'period'} = $this->normalizer->normalize($object->getPeriod(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getSubmittedAt()) {
            $data->{'submittedAt'} = $object->getSubmittedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getApprovedAt()) {
            $data->{'approvedAt'} = $object->getApprovedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getApprovedBy()) {
            $data->{'approvedBy'} = $this->normalizer->normalize($object->getApprovedBy(), 'json', $context);
        }
        if (null !== $object->getEntries()) {
            $values = array();
            foreach ($object->getEntries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'entries'} = $values;
        }
        return $data;
    }
}