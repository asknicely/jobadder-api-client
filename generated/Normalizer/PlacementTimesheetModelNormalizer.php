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
class PlacementTimesheetModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementTimesheetModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementTimesheetModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementTimesheetModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('period', $data)) {
            $object->setPeriod($this->denormalizer->denormalize($data['period'], 'Varspool\\JobAdder\\V2\\Model\\DateRangeModel', 'json', $context));
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        if (\array_key_exists('submittedAt', $data)) {
            $object->setSubmittedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['submittedAt']));
        }
        if (\array_key_exists('approvedAt', $data)) {
            $object->setApprovedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['approvedAt']));
        }
        if (\array_key_exists('approvedBy', $data)) {
            $object->setApprovedBy($this->denormalizer->denormalize($data['approvedBy'], 'Varspool\\JobAdder\\V2\\Model\\PlacementTimesheetApproverModel', 'json', $context));
        }
        if (\array_key_exists('entries', $data)) {
            $values = array();
            foreach ($data['entries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\PlacementTimesheetEntryModel', 'json', $context);
            }
            $object->setEntries($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('period') && null !== $object->getPeriod()) {
            $data['period'] = $this->normalizer->normalize($object->getPeriod(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('submittedAt') && null !== $object->getSubmittedAt()) {
            $data['submittedAt'] = $object->getSubmittedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('approvedAt') && null !== $object->getApprovedAt()) {
            $data['approvedAt'] = $object->getApprovedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('approvedBy') && null !== $object->getApprovedBy()) {
            $data['approvedBy'] = $this->normalizer->normalize($object->getApprovedBy(), 'json', $context);
        }
        if ($object->isInitialized('entries') && null !== $object->getEntries()) {
            $values = array();
            foreach ($object->getEntries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['entries'] = $values;
        }
        return $data;
    }
}