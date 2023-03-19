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
class PlacementExportModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementExportModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementExportModel';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementExportModel();
        if (property_exists($data, 'payroll')) {
            $object->setPayroll($data->{'payroll'});
        }
        if (property_exists($data, 'timesheets')) {
            $object->setTimesheets($data->{'timesheets'});
        }
        if (property_exists($data, 'approvers')) {
            $values = array();
            foreach ($data->{'approvers'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\PlacementApproverModel', 'json', $context);
            }
            $object->setApprovers($values);
        }
        if (property_exists($data, 'onboarding')) {
            $object->setOnboarding($data->{'onboarding'});
        }
        if (property_exists($data, 'onboardingManagers')) {
            $values_1 = array();
            foreach ($data->{'onboardingManagers'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\PlacementApproverModel', 'json', $context);
            }
            $object->setOnboardingManagers($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPayroll()) {
            $data->{'payroll'} = $object->getPayroll();
        }
        if (null !== $object->getTimesheets()) {
            $data->{'timesheets'} = $object->getTimesheets();
        }
        if (null !== $object->getApprovers()) {
            $values = array();
            foreach ($object->getApprovers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'approvers'} = $values;
        }
        if (null !== $object->getOnboarding()) {
            $data->{'onboarding'} = $object->getOnboarding();
        }
        if (null !== $object->getOnboardingManagers()) {
            $values_1 = array();
            foreach ($object->getOnboardingManagers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'onboardingManagers'} = $values_1;
        }
        return $data;
    }
}