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
class PlacementRepresentationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\PlacementRepresentation';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\PlacementRepresentation';
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
        $object = new \Varspool\JobAdder\V2\Model\PlacementRepresentation();
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
        if (\array_key_exists('workShift', $data)) {
            $object->setWorkShift($this->denormalizer->denormalize($data['workShift'], 'Varspool\\JobAdder\\V2\\Model\\PlacementWorkShiftModel', 'json', $context));
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($data['summary']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], 'Varspool\\JobAdder\\V2\\Model\\CompanyNameModel', 'json', $context));
        }
        if (\array_key_exists('contact', $data)) {
            $object->setContact($this->denormalizer->denormalize($data['contact'], 'Varspool\\JobAdder\\V2\\Model\\ContactNameModel', 'json', $context));
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($this->denormalizer->denormalize($data['source'], 'Varspool\\JobAdder\\V2\\Model\\PlacementSourceModel', 'json', $context));
        }
        if (\array_key_exists('workplaceAddress', $data)) {
            $object->setWorkplaceAddress($this->denormalizer->denormalize($data['workplaceAddress'], 'Varspool\\JobAdder\\V2\\Model\\CompanyAddressModel', 'json', $context));
        }
        if (\array_key_exists('paymentType', $data)) {
            $object->setPaymentType($data['paymentType']);
        }
        if (\array_key_exists('salary', $data)) {
            $object->setSalary($this->denormalizer->denormalize($data['salary'], 'Varspool\\JobAdder\\V2\\Model\\PlacementSalaryModel', 'json', $context));
        }
        if (\array_key_exists('contractRate', $data)) {
            $object->setContractRate($this->denormalizer->denormalize($data['contractRate'], 'Varspool\\JobAdder\\V2\\Model\\PlacementContractRateModel', 'json', $context));
        }
        if (\array_key_exists('rates', $data)) {
            $values = array();
            foreach ($data['rates'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Varspool\\JobAdder\\V2\\Model\\PlacementRateModel', 'json', $context);
            }
            $object->setRates($values);
        }
        if (\array_key_exists('award', $data)) {
            $object->setAward($data['award']);
        }
        if (\array_key_exists('industryCode', $data)) {
            $object->setIndustryCode($data['industryCode']);
        }
        if (\array_key_exists('chargeCurrency', $data)) {
            $object->setChargeCurrency($data['chargeCurrency']);
        }
        if (\array_key_exists('feeSplit', $data)) {
            $object->setFeeSplit($data['feeSplit']);
        }
        if (\array_key_exists('billing', $data)) {
            $object->setBilling($this->denormalizer->denormalize($data['billing'], 'Varspool\\JobAdder\\V2\\Model\\PlacementBillingModel', 'json', $context));
        }
        if (\array_key_exists('export', $data)) {
            $object->setExport($this->denormalizer->denormalize($data['export'], 'Varspool\\JobAdder\\V2\\Model\\PlacementExportModel', 'json', $context));
        }
        if (\array_key_exists('custom', $data)) {
            $values_1 = array();
            foreach ($data['custom'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\CustomFieldValueModel', 'json', $context);
            }
            $object->setCustom($values_1);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Varspool\\JobAdder\\V2\\Model\\UserNameModel', 'json', $context));
        }
        if (\array_key_exists('recruiters', $data)) {
            $values_2 = array();
            foreach ($data['recruiters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Varspool\\JobAdder\\V2\\Model\\PlacementRecruiterModel', 'json', $context);
            }
            $object->setRecruiters($values_2);
        }
        if (\array_key_exists('partnerActions', $data)) {
            $values_3 = array();
            foreach ($data['partnerActions'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Varspool\\JobAdder\\V2\\Model\\PartnerActionStageModel', 'json', $context);
            }
            $object->setPartnerActions($values_3);
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
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'Varspool\\JobAdder\\V2\\Model\\PlacementLinks', 'json', $context));
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
        if ($object->isInitialized('workShift') && null !== $object->getWorkShift()) {
            $data['workShift'] = $this->normalizer->normalize($object->getWorkShift(), 'json', $context);
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if ($object->isInitialized('contact') && null !== $object->getContact()) {
            $data['contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $this->normalizer->normalize($object->getSource(), 'json', $context);
        }
        if ($object->isInitialized('workplaceAddress') && null !== $object->getWorkplaceAddress()) {
            $data['workplaceAddress'] = $this->normalizer->normalize($object->getWorkplaceAddress(), 'json', $context);
        }
        if ($object->isInitialized('paymentType') && null !== $object->getPaymentType()) {
            $data['paymentType'] = $object->getPaymentType();
        }
        if ($object->isInitialized('salary') && null !== $object->getSalary()) {
            $data['salary'] = $this->normalizer->normalize($object->getSalary(), 'json', $context);
        }
        if ($object->isInitialized('contractRate') && null !== $object->getContractRate()) {
            $data['contractRate'] = $this->normalizer->normalize($object->getContractRate(), 'json', $context);
        }
        if ($object->isInitialized('rates') && null !== $object->getRates()) {
            $values = array();
            foreach ($object->getRates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['rates'] = $values;
        }
        if ($object->isInitialized('award') && null !== $object->getAward()) {
            $data['award'] = $object->getAward();
        }
        if ($object->isInitialized('industryCode') && null !== $object->getIndustryCode()) {
            $data['industryCode'] = $object->getIndustryCode();
        }
        if ($object->isInitialized('chargeCurrency') && null !== $object->getChargeCurrency()) {
            $data['chargeCurrency'] = $object->getChargeCurrency();
        }
        if ($object->isInitialized('feeSplit') && null !== $object->getFeeSplit()) {
            $data['feeSplit'] = $object->getFeeSplit();
        }
        if ($object->isInitialized('billing') && null !== $object->getBilling()) {
            $data['billing'] = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        if ($object->isInitialized('export') && null !== $object->getExport()) {
            $data['export'] = $this->normalizer->normalize($object->getExport(), 'json', $context);
        }
        if ($object->isInitialized('custom') && null !== $object->getCustom()) {
            $values_1 = array();
            foreach ($object->getCustom() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['custom'] = $values_1;
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if ($object->isInitialized('recruiters') && null !== $object->getRecruiters()) {
            $values_2 = array();
            foreach ($object->getRecruiters() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['recruiters'] = $values_2;
        }
        if ($object->isInitialized('partnerActions') && null !== $object->getPartnerActions()) {
            $values_3 = array();
            foreach ($object->getPartnerActions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['partnerActions'] = $values_3;
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
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        return $data;
    }
}