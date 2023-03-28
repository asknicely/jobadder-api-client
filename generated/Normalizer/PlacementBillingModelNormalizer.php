<?php

namespace AskNicely\JobAdder\Generated\Normalizer;

use AskNicely\JobAdder\Generated\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PlacementBillingModelNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'AskNicely\\JobAdder\\Generated\\Model\\PlacementBillingModel') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \AskNicely\JobAdder\Generated\Model\PlacementBillingModel) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \AskNicely\JobAdder\Generated\Model\PlacementBillingModel();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'contact')) {
            $object->setContact($this->serializer->deserialize($data->{'contact'}, 'AskNicely\\JobAdder\\Generated\\Model\\ContactSummaryModel', 'raw', $context));
        }
        if (property_exists($data, 'address')) {
            $object->setAddress($this->serializer->deserialize($data->{'address'}, 'AskNicely\\JobAdder\\Generated\\Model\\CompanyAddressModel', 'raw', $context));
        }
        if (property_exists($data, 'orderRef')) {
            $object->setOrderRef($data->{'orderRef'});
        }
        if (property_exists($data, 'invoiceRef')) {
            $object->setInvoiceRef($data->{'invoiceRef'});
        }
        if (property_exists($data, 'terms')) {
            $object->setTerms($data->{'terms'});
        }
        if (property_exists($data, 'dueDate')) {
            $object->setDueDate($data->{'dueDate'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->serializer->serialize($object->getContact(), 'raw', $context);
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->serializer->serialize($object->getAddress(), 'raw', $context);
        }
        if (null !== $object->getOrderRef()) {
            $data->{'orderRef'} = $object->getOrderRef();
        }
        if (null !== $object->getInvoiceRef()) {
            $data->{'invoiceRef'} = $object->getInvoiceRef();
        }
        if (null !== $object->getTerms()) {
            $data->{'terms'} = $object->getTerms();
        }
        if (null !== $object->getDueDate()) {
            $data->{'dueDate'} = $object->getDueDate();
        }

        return $data;
    }
}
