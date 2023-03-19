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
class JobApplicationRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationRepresentation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\JobApplicationRepresentation();
        if (property_exists($data, 'applicationId')) {
            $object->setApplicationId($data->{'applicationId'});
        }
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'jobReference')) {
            $object->setJobReference($data->{'jobReference'});
        }
        if (property_exists($data, 'manual')) {
            $object->setManual($data->{'manual'});
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'rating')) {
            $object->setRating($data->{'rating'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->denormalizer->denormalize($data->{'status'}, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusModel', 'json', $context));
        }
        if (property_exists($data, 'review')) {
            $object->setReview($this->denormalizer->denormalize($data->{'review'}, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationReviewModel', 'json', $context));
        }
        if (property_exists($data, 'candidate')) {
            $object->setCandidate($this->denormalizer->denormalize($data->{'candidate'}, 'Varspool\\JobAdder\\V2\\Model\\CandidateNameModel', 'json', $context));
        }
        if (property_exists($data, 'job')) {
            $object->setJob($this->denormalizer->denormalize($data->{'job'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderTitleModel', 'json', $context));
        }
        if (property_exists($data, 'jobAd')) {
            $object->setJobAd($this->denormalizer->denormalize($data->{'jobAd'}, 'Varspool\\JobAdder\\V2\\Model\\JobAdSummaryModel', 'json', $context));
        }
        if (property_exists($data, 'submittedDetails')) {
            $object->setSubmittedDetails($this->denormalizer->denormalize($data->{'submittedDetails'}, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSubmittedDetailsModel', 'json', $context));
        }
        if (property_exists($data, 'screening')) {
            $object->setScreening($this->denormalizer->denormalize($data->{'screening'}, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationScreeningModel', 'json', $context));
        }
        if (property_exists($data, 'custom')) {
            $values = array();
            foreach ($data->{'custom'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values);
        }
        if (property_exists($data, 'partnerActions')) {
            $values_1 = array();
            foreach ($data->{'partnerActions'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel', 'json', $context);
            }
            $object->setPartnerActions($values_1);
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($this->denormalizer->denormalize($data->{'createdBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'createdAt'}));
        }
        if (property_exists($data, 'updatedBy')) {
            $object->setUpdatedBy($this->denormalizer->denormalize($data->{'updatedBy'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'updatedAt'}));
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\JobApplicationLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getApplicationId()) {
            $data->{'applicationId'} = $object->getApplicationId();
        }
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getJobReference()) {
            $data->{'jobReference'} = $object->getJobReference();
        }
        if (null !== $object->getManual()) {
            $data->{'manual'} = $object->getManual();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getRating()) {
            $data->{'rating'} = $object->getRating();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getReview()) {
            $data->{'review'} = $this->normalizer->normalize($object->getReview(), 'json', $context);
        }
        if (null !== $object->getCandidate()) {
            $data->{'candidate'} = $this->normalizer->normalize($object->getCandidate(), 'json', $context);
        }
        if (null !== $object->getJob()) {
            $data->{'job'} = $this->normalizer->normalize($object->getJob(), 'json', $context);
        }
        if (null !== $object->getJobAd()) {
            $data->{'jobAd'} = $this->normalizer->normalize($object->getJobAd(), 'json', $context);
        }
        if (null !== $object->getSubmittedDetails()) {
            $data->{'submittedDetails'} = $this->normalizer->normalize($object->getSubmittedDetails(), 'json', $context);
        }
        if (null !== $object->getScreening()) {
            $data->{'screening'} = $this->normalizer->normalize($object->getScreening(), 'json', $context);
        }
        if (null !== $object->getCustom()) {
            $values = array();
            foreach ($object->getCustom() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'custom'} = $values;
        }
        if (null !== $object->getPartnerActions()) {
            $values_1 = array();
            foreach ($object->getPartnerActions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'partnerActions'} = $values_1;
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $this->normalizer->normalize($object->getCreatedBy(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getUpdatedBy()) {
            $data->{'updatedBy'} = $this->normalizer->normalize($object->getUpdatedBy(), 'json', $context);
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}