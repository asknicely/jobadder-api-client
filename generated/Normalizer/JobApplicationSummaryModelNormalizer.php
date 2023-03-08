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
class JobApplicationSummaryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSummaryModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobApplicationSummaryModel';
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
        $object = new \Varspool\JobAdder\V2\Model\JobApplicationSummaryModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('applicationId', $data)) {
            $object->setApplicationId($data['applicationId']);
        }
        if (\array_key_exists('jobTitle', $data)) {
            $object->setJobTitle($data['jobTitle']);
        }
        if (\array_key_exists('jobReference', $data)) {
            $object->setJobReference($data['jobReference']);
        }
        if (\array_key_exists('manual', $data)) {
            $object->setManual($data['manual']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('rating', $data)) {
            $object->setRating($data['rating']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], 'Varspool\\JobAdder\\V2\\Model\\JobApplicationStatusModel', 'json', $context));
        }
        if (\array_key_exists('review', $data)) {
            $object->setReview($this->denormalizer->denormalize($data['review'], 'Varspool\\JobAdder\\V2\\Model\\JobApplicationReviewModel', 'json', $context));
        }
        if (\array_key_exists('candidate', $data)) {
            $object->setCandidate($this->denormalizer->denormalize($data['candidate'], 'Varspool\\JobAdder\\V2\\Model\\CandidateNameModel', 'json', $context));
        }
        if (\array_key_exists('job', $data)) {
            $object->setJob($this->denormalizer->denormalize($data['job'], 'Varspool\\JobAdder\\V2\\Model\\JobOrderTitleModel', 'json', $context));
        }
        if (\array_key_exists('jobAd', $data)) {
            $object->setJobAd($this->denormalizer->denormalize($data['jobAd'], 'Varspool\\JobAdder\\V2\\Model\\JobAdSummaryModel', 'json', $context));
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
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
        $data['applicationId'] = $object->getApplicationId();
        if ($object->isInitialized('jobTitle') && null !== $object->getJobTitle()) {
            $data['jobTitle'] = $object->getJobTitle();
        }
        if ($object->isInitialized('jobReference') && null !== $object->getJobReference()) {
            $data['jobReference'] = $object->getJobReference();
        }
        if ($object->isInitialized('manual') && null !== $object->getManual()) {
            $data['manual'] = $object->getManual();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('rating') && null !== $object->getRating()) {
            $data['rating'] = $object->getRating();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if ($object->isInitialized('review') && null !== $object->getReview()) {
            $data['review'] = $this->normalizer->normalize($object->getReview(), 'json', $context);
        }
        if ($object->isInitialized('candidate') && null !== $object->getCandidate()) {
            $data['candidate'] = $this->normalizer->normalize($object->getCandidate(), 'json', $context);
        }
        if ($object->isInitialized('job') && null !== $object->getJob()) {
            $data['job'] = $this->normalizer->normalize($object->getJob(), 'json', $context);
        }
        if ($object->isInitialized('jobAd') && null !== $object->getJobAd()) {
            $data['jobAd'] = $this->normalizer->normalize($object->getJobAd(), 'json', $context);
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
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