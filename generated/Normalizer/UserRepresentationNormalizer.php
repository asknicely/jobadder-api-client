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
class UserRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\UserRepresentation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\UserRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\UserRepresentation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('userId', $data)) {
            $object->setUserId($data['userId']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('mobile', $data)) {
            $object->setMobile($data['mobile']);
        }
        if (\array_key_exists('inactive', $data)) {
            $object->setInactive($data['inactive']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('mentionName', $data)) {
            $object->setMentionName($data['mentionName']);
        }
        if (\array_key_exists('office', $data)) {
            $object->setOffice($this->denormalizer->denormalize($data['office'], 'Varspool\\JobAdder\\V2\\Model\\UserOfficeSummaryModel', 'json', $context));
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data['updatedAt']));
        }
        if (\array_key_exists('timeZone', $data)) {
            $object->setTimeZone($data['timeZone']);
        }
        if (\array_key_exists('culture', $data)) {
            $object->setCulture($data['culture']);
        }
        if (\array_key_exists('admin', $data)) {
            $object->setAdmin($data['admin']);
        }
        if (\array_key_exists('userGroups', $data)) {
            $values = array();
            foreach ($data['userGroups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\UserGroupSummaryModel', 'json', $context);
            }
            $object->setUserGroups($values);
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\UserLinks', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['userId'] = $object->getUserId();
        if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('phone') && null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if ($object->isInitialized('mobile') && null !== $object->getMobile()) {
            $data['mobile'] = $object->getMobile();
        }
        if ($object->isInitialized('inactive') && null !== $object->getInactive()) {
            $data['inactive'] = $object->getInactive();
        }
        if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if ($object->isInitialized('mentionName') && null !== $object->getMentionName()) {
            $data['mentionName'] = $object->getMentionName();
        }
        if ($object->isInitialized('office') && null !== $object->getOffice()) {
            $data['office'] = $this->normalizer->normalize($object->getOffice(), 'json', $context);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s');
        }
        if ($object->isInitialized('timeZone') && null !== $object->getTimeZone()) {
            $data['timeZone'] = $object->getTimeZone();
        }
        if ($object->isInitialized('culture') && null !== $object->getCulture()) {
            $data['culture'] = $object->getCulture();
        }
        if ($object->isInitialized('admin') && null !== $object->getAdmin()) {
            $data['admin'] = $object->getAdmin();
        }
        if ($object->isInitialized('userGroups') && null !== $object->getUserGroups()) {
            $values = array();
            foreach ($object->getUserGroups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['userGroups'] = $values;
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}