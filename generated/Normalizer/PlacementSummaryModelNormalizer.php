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
class PlacementSummaryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementSummaryModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementSummaryModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementSummaryModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('placementId', $data)) {
            $object->setPlacementId($data['placementId']);
        }
        if (\array_key_exists('jobTitle', $data)) {
            $object->setJobTitle($data['jobTitle']);
        }
        if (\array_key_exists('job', $data)) {
            $object->setJob($this->denormalizer->denormalize($data['job'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderTitleModel', 'json', $context));
        }
        if (\array_key_exists('candidate', $data)) {
            $object->setCandidate($this->denormalizer->denormalize($data['candidate'], 'Varspool\\JobAdder\\V2\\Model\\CandidatePlacementModel', 'json', $context));
        }
        if (\array_key_exists('approved', $data)) {
            $object->setApproved($data['approved']);
        }
        if (\array_key_exists('approvedAt', $data)) {
            $object->setApprovedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['approvedAt']));
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['createdBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        if (\array_key_exists('updatedBy', $data)) {
            $object->setUpdatedBy($this->denormalizer->denormalize($data['updatedBy'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['updatedAt']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['placementId'] = $object->getPlacementId();
        if ($object->isInitialized('jobTitle') && null !== $object->getJobTitle()) {
            $data['jobTitle'] = $object->getJobTitle();
        }
        if ($object->isInitialized('job') && null !== $object->getJob()) {
            $data['job'] = $this->normalizer->normalize($object->getJob(), 'json', $context);
        }
        if ($object->isInitialized('candidate') && null !== $object->getCandidate()) {
            $data['candidate'] = $this->normalizer->normalize($object->getCandidate(), 'json', $context);
        }
        if ($object->isInitialized('approved') && null !== $object->getApproved()) {
            $data['approved'] = $object->getApproved();
        }
        if ($object->isInitialized('approvedAt') && null !== $object->getApprovedAt()) {
            $data['approvedAt'] = $object->getApprovedAt()->format('Y-m-d\\TH:i:s');
        }
        $data['type'] = $object->getType();
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate()->format('Y-m-d');
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate()->format('Y-m-d');
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['createdBy'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('updatedBy') && null !== $object->getUpdatedBy()) {
            $data['updatedBy'] = $this->normalizer->normalize($object->getUpdatedBy(), 'json', $context);
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        return $data;
    }
}