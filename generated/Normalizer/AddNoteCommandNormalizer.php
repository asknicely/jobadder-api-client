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
class AddNoteCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\AddNoteCommand';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\AddNoteCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\AddNoteCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('jobId', $data)) {
            $values = array();
            foreach ($data['jobId'] as $value) {
                $values[] = $value;
            }
            $object->setJobId($values);
        }
        if (\array_key_exists('requisitionId', $data)) {
            $values_1 = array();
            foreach ($data['requisitionId'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRequisitionId($values_1);
        }
        if (\array_key_exists('candidateId', $data)) {
            $values_2 = array();
            foreach ($data['candidateId'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCandidateId($values_2);
        }
        if (\array_key_exists('applicationId', $data)) {
            $values_3 = array();
            foreach ($data['applicationId'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setApplicationId($values_3);
        }
        if (\array_key_exists('placementId', $data)) {
            $values_4 = array();
            foreach ($data['placementId'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPlacementId($values_4);
        }
        if (\array_key_exists('companyId', $data)) {
            $values_5 = array();
            foreach ($data['companyId'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setCompanyId($values_5);
        }
        if (\array_key_exists('contactId', $data)) {
            $values_6 = array();
            foreach ($data['contactId'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setContactId($values_6);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($this->denormalizer->denormalize($data['createdBy'], 'Varspool\\JobAdder\\V2\\Model\\SubmitUserModel', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['type'] = $object->getType();
        $data['text'] = $object->getText();
        if ($object->isInitialized('jobId') && null !== $object->getJobId()) {
            $values = array();
            foreach ($object->getJobId() as $value) {
                $values[] = $value;
            }
            $data['jobId'] = $values;
        }
        if ($object->isInitialized('requisitionId') && null !== $object->getRequisitionId()) {
            $values_1 = array();
            foreach ($object->getRequisitionId() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['requisitionId'] = $values_1;
        }
        if ($object->isInitialized('candidateId') && null !== $object->getCandidateId()) {
            $values_2 = array();
            foreach ($object->getCandidateId() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['candidateId'] = $values_2;
        }
        if ($object->isInitialized('applicationId') && null !== $object->getApplicationId()) {
            $values_3 = array();
            foreach ($object->getApplicationId() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['applicationId'] = $values_3;
        }
        if ($object->isInitialized('placementId') && null !== $object->getPlacementId()) {
            $values_4 = array();
            foreach ($object->getPlacementId() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['placementId'] = $values_4;
        }
        if ($object->isInitialized('companyId') && null !== $object->getCompanyId()) {
            $values_5 = array();
            foreach ($object->getCompanyId() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['companyId'] = $values_5;
        }
        if ($object->isInitialized('contactId') && null !== $object->getContactId()) {
            $values_6 = array();
            foreach ($object->getContactId() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['contactId'] = $values_6;
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
            $data['createdBy'] = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        return $data;
    }
}