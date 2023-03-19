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
class AddNoteCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\AddNoteCommand';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\AddNoteCommand';
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
        $object = new \Varspool\JobAdder\V2\Model\AddNoteCommand();
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'text')) {
            $object->setText($data->{'text'});
        }
        if (property_exists($data, 'jobId')) {
            $values = array();
            foreach ($data->{'jobId'} as $value) {
                $values[] = $value;
            }
            $object->setJobId($values);
        }
        if (property_exists($data, 'requisitionId')) {
            $values_1 = array();
            foreach ($data->{'requisitionId'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRequisitionId($values_1);
        }
        if (property_exists($data, 'candidateId')) {
            $values_2 = array();
            foreach ($data->{'candidateId'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCandidateId($values_2);
        }
        if (property_exists($data, 'applicationId')) {
            $values_3 = array();
            foreach ($data->{'applicationId'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setApplicationId($values_3);
        }
        if (property_exists($data, 'placementId')) {
            $values_4 = array();
            foreach ($data->{'placementId'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPlacementId($values_4);
        }
        if (property_exists($data, 'companyId')) {
            $values_5 = array();
            foreach ($data->{'companyId'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setCompanyId($values_5);
        }
        if (property_exists($data, 'contactId')) {
            $values_6 = array();
            foreach ($data->{'contactId'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setContactId($values_6);
        }
        if (property_exists($data, 'reference')) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($this->denormalizer->denormalize($data->{'createdBy'}, 'Varspool\\JobAdder\\V2\\Model\\SubmitUserModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getJobId()) {
            $values = array();
            foreach ($object->getJobId() as $value) {
                $values[] = $value;
            }
            $data->{'jobId'} = $values;
        }
        if (null !== $object->getRequisitionId()) {
            $values_1 = array();
            foreach ($object->getRequisitionId() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'requisitionId'} = $values_1;
        }
        if (null !== $object->getCandidateId()) {
            $values_2 = array();
            foreach ($object->getCandidateId() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'candidateId'} = $values_2;
        }
        if (null !== $object->getApplicationId()) {
            $values_3 = array();
            foreach ($object->getApplicationId() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'applicationId'} = $values_3;
        }
        if (null !== $object->getPlacementId()) {
            $values_4 = array();
            foreach ($object->getPlacementId() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'placementId'} = $values_4;
        }
        if (null !== $object->getCompanyId()) {
            $values_5 = array();
            foreach ($object->getCompanyId() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'companyId'} = $values_5;
        }
        if (null !== $object->getContactId()) {
            $values_6 = array();
            foreach ($object->getContactId() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'contactId'} = $values_6;
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        return $data;
    }
}