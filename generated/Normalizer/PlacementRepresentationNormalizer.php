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
class PlacementRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementRepresentation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementRepresentation();
        if (property_exists($data, 'placementId')) {
            $object->setPlacementId($data->{'placementId'});
        }
        if (property_exists($data, 'jobTitle')) {
            $object->setJobTitle($data->{'jobTitle'});
        }
        if (property_exists($data, 'job')) {
            $object->setJob($this->denormalizer->denormalize($data->{'job'}, 'Varspool\\JobAdder\\V2\\Model\\JobOrderTitleModel', 'json', $context));
        }
        if (property_exists($data, 'candidate')) {
            $object->setCandidate($this->denormalizer->denormalize($data->{'candidate'}, 'Varspool\\JobAdder\\V2\\Model\\CandidatePlacementModel', 'json', $context));
        }
        if (property_exists($data, 'approved')) {
            $object->setApproved($data->{'approved'});
        }
        if (property_exists($data, 'approvedAt')) {
            $object->setApprovedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s', $data->{'approvedAt'}));
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->denormalizer->denormalize($data->{'status'}, 'Varspool\\JobAdder\\V2\\Model\\StatusModel', 'json', $context));
        }
        if (property_exists($data, 'startDate')) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data->{'startDate'})->setTime(0, 0, 0));
        }
        if (property_exists($data, 'endDate')) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data->{'endDate'})->setTime(0, 0, 0));
        }
        if (property_exists($data, 'workShift')) {
            $object->setWorkShift($this->denormalizer->denormalize($data->{'workShift'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementWorkShiftModel', 'json', $context));
        }
        if (property_exists($data, 'summary')) {
            $object->setSummary($data->{'summary'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->denormalizer->denormalize($data->{'company'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context));
        }
        if (property_exists($data, 'contact')) {
            $object->setContact($this->denormalizer->denormalize($data->{'contact'}, 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (property_exists($data, 'source')) {
            $object->setSource($this->denormalizer->denormalize($data->{'source'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementSourceModel', 'json', $context));
        }
        if (property_exists($data, 'workplaceAddress')) {
            $object->setWorkplaceAddress($this->denormalizer->denormalize($data->{'workplaceAddress'}, 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'json', $context));
        }
        if (property_exists($data, 'paymentType')) {
            $object->setPaymentType($data->{'paymentType'});
        }
        if (property_exists($data, 'salary')) {
            $object->setSalary($this->denormalizer->denormalize($data->{'salary'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementSalaryModel', 'json', $context));
        }
        if (property_exists($data, 'contractRate')) {
            $object->setContractRate($this->denormalizer->denormalize($data->{'contractRate'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementContractRateModel', 'json', $context));
        }
        if (property_exists($data, 'rates')) {
            $values = array();
            foreach ($data->{'rates'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\PlacementRateModel', 'json', $context);
            }
            $object->setRates($values);
        }
        if (property_exists($data, 'award')) {
            $object->setAward($data->{'award'});
        }
        if (property_exists($data, 'industryCode')) {
            $object->setIndustryCode($data->{'industryCode'});
        }
        if (property_exists($data, 'chargeCurrency')) {
            $object->setChargeCurrency($data->{'chargeCurrency'});
        }
        if (property_exists($data, 'feeSplit')) {
            $object->setFeeSplit($data->{'feeSplit'});
        }
        if (property_exists($data, 'billing')) {
            $object->setBilling($this->denormalizer->denormalize($data->{'billing'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementBillingModel', 'json', $context));
        }
        if (property_exists($data, 'export')) {
            $object->setExport($this->denormalizer->denormalize($data->{'export'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementExportModel', 'json', $context));
        }
        if (property_exists($data, 'custom')) {
            $values_1 = array();
            foreach ($data->{'custom'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_1);
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (property_exists($data, 'recruiters')) {
            $values_2 = array();
            foreach ($data->{'recruiters'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\PlacementRecruiterModel', 'json', $context);
            }
            $object->setRecruiters($values_2);
        }
        if (property_exists($data, 'partnerActions')) {
            $values_3 = array();
            foreach ($data->{'partnerActions'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel', 'json', $context);
            }
            $object->setPartnerActions($values_3);
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
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'Varspool\\JobAdder\\V2\\Model\\PlacementLinks', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPlacementId()) {
            $data->{'placementId'} = $object->getPlacementId();
        }
        if (null !== $object->getJobTitle()) {
            $data->{'jobTitle'} = $object->getJobTitle();
        }
        if (null !== $object->getJob()) {
            $data->{'job'} = $this->normalizer->normalize($object->getJob(), 'json', $context);
        }
        if (null !== $object->getCandidate()) {
            $data->{'candidate'} = $this->normalizer->normalize($object->getCandidate(), 'json', $context);
        }
        if (null !== $object->getApproved()) {
            $data->{'approved'} = $object->getApproved();
        }
        if (null !== $object->getApprovedAt()) {
            $data->{'approvedAt'} = $object->getApprovedAt()->format('Y-m-d\\TH:i:s');
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        if (null !== $object->getStartDate()) {
            $data->{'startDate'} = $object->getStartDate()->format('Y-m-d');
        }
        if (null !== $object->getEndDate()) {
            $data->{'endDate'} = $object->getEndDate()->format('Y-m-d');
        }
        if (null !== $object->getWorkShift()) {
            $data->{'workShift'} = $this->normalizer->normalize($object->getWorkShift(), 'json', $context);
        }
        if (null !== $object->getSummary()) {
            $data->{'summary'} = $object->getSummary();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $this->normalizer->normalize($object->getSource(), 'json', $context);
        }
        if (null !== $object->getWorkplaceAddress()) {
            $data->{'workplaceAddress'} = $this->normalizer->normalize($object->getWorkplaceAddress(), 'json', $context);
        }
        if (null !== $object->getPaymentType()) {
            $data->{'paymentType'} = $object->getPaymentType();
        }
        if (null !== $object->getSalary()) {
            $data->{'salary'} = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if (null !== $object->getContractRate()) {
            $data->{'contractRate'} = $this->normalizer->normalize($object->getContractRate(), 'json', $context);
        }
        if (null !== $object->getRates()) {
            $values = array();
            foreach ($object->getRates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'rates'} = $values;
        }
        if (null !== $object->getAward()) {
            $data->{'award'} = $object->getAward();
        }
        if (null !== $object->getIndustryCode()) {
            $data->{'industryCode'} = $object->getIndustryCode();
        }
        if (null !== $object->getChargeCurrency()) {
            $data->{'chargeCurrency'} = $object->getChargeCurrency();
        }
        if (null !== $object->getFeeSplit()) {
            $data->{'feeSplit'} = $object->getFeeSplit();
        }
        if (null !== $object->getBilling()) {
            $data->{'billing'} = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        if (null !== $object->getExport()) {
            $data->{'export'} = $this->normalizer->normalize($object->getExport(), 'json', $context);
        }
        if (null !== $object->getCustom()) {
            $values_1 = array();
            foreach ($object->getCustom() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'custom'} = $values_1;
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getRecruiters()) {
            $values_2 = array();
            foreach ($object->getRecruiters() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'recruiters'} = $values_2;
        }
        if (null !== $object->getPartnerActions()) {
            $values_3 = array();
            foreach ($object->getPartnerActions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'partnerActions'} = $values_3;
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