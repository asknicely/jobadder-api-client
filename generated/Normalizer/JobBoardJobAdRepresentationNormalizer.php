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
class JobBoardJobAdRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\JobBoardJobAdRepresentation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\JobBoardJobAdRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\JobBoardJobAdRepresentation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('adId', $data)) {
            $object->setAdId($data['adId']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('bulletPoints', $data)) {
            $values = array();
            foreach ($data['bulletPoints'] as $value) {
                $values[] = $value;
            }
            $object->setBulletPoints($values);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('screening', $data)) {
            $values_1 = array();
            foreach ($data['screening'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\JobAdScreeningQuestionModel', 'json', $context);
            }
            $object->setScreening($values_1);
        }
        if (\array_key_exists('portal', $data)) {
            $object->setPortal($this->denormalizer->denormalize($data['portal'], 'Varspool\\JobAdder\\V2\\Model\\JobAdPortalModel', 'json', $context));
        }
        if (\array_key_exists('postedAt', $data)) {
            $object->setPostedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['postedAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['updatedAt']));
        }
        if (\array_key_exists('expiresAt', $data)) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['expiresAt']));
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\JobBoardJobAdLinks', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('adId') && null !== $object->getAdId()) {
            $data['adId'] = $object->getAdId();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('bulletPoints') && null !== $object->getBulletPoints()) {
            $values = array();
            foreach ($object->getBulletPoints() as $value) {
                $values[] = $value;
            }
            $data['bulletPoints'] = $values;
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('screening') && null !== $object->getScreening()) {
            $values_1 = array();
            foreach ($object->getScreening() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['screening'] = $values_1;
        }
        if ($object->isInitialized('portal') && null !== $object->getPortal()) {
            $data['portal'] = $this->normalizer->normalize($object->getPortal(), 'json', $context);
        }
        if ($object->isInitialized('postedAt') && null !== $object->getPostedAt()) {
            $data['postedAt'] = $object->getPostedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
            $data['expiresAt'] = $object->getExpiresAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}