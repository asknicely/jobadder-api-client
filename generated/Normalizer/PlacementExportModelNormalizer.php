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
class PlacementExportModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementExportModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementExportModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementExportModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('payroll', $data)) {
            $object->setPayroll($data['payroll']);
        }
        if (\array_key_exists('timesheets', $data)) {
            $object->setTimesheets($data['timesheets']);
        }
        if (\array_key_exists('approvers', $data)) {
            $values = array();
            foreach ($data['approvers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\PlacementApproverModel', 'json', $context);
            }
            $object->setApprovers($values);
        }
        if (\array_key_exists('onboarding', $data)) {
            $object->setOnboarding($data['onboarding']);
        }
        if (\array_key_exists('onboardingManagers', $data)) {
            $values_1 = array();
            foreach ($data['onboardingManagers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\PlacementApproverModel', 'json', $context);
            }
            $object->setOnboardingManagers($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('payroll') && null !== $object->getPayroll()) {
            $data['payroll'] = $object->getPayroll();
        }
        if ($object->isInitialized('timesheets') && null !== $object->getTimesheets()) {
            $data['timesheets'] = $object->getTimesheets();
        }
        if ($object->isInitialized('approvers') && null !== $object->getApprovers()) {
            $values = array();
            foreach ($object->getApprovers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['approvers'] = $values;
        }
        if ($object->isInitialized('onboarding') && null !== $object->getOnboarding()) {
            $data['onboarding'] = $object->getOnboarding();
        }
        if ($object->isInitialized('onboardingManagers') && null !== $object->getOnboardingManagers()) {
            $values_1 = array();
            foreach ($object->getOnboardingManagers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['onboardingManagers'] = $values_1;
        }
        return $data;
    }
}