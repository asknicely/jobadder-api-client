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
class ActivityQuestionModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\ActivityQuestionModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\ActivityQuestionModel';
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
        $object = new \Varspool\JobAdder\V2\Model\ActivityQuestionModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('questionId', $data)) {
            $object->setQuestionId($data['questionId']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('mandatory', $data)) {
            $object->setMandatory($data['mandatory']);
        }
        if (\array_key_exists('possibleValues', $data)) {
            $values = array();
            foreach ($data['possibleValues'] as $value) {
                $values[] = $value;
            }
            $object->setPossibleValues($values);
        }
        if (\array_key_exists('questionAnswerType', $data)) {
            $object->setQuestionAnswerType($data['questionAnswerType']);
        }
        if (\array_key_exists('minimumRating', $data)) {
            $object->setMinimumRating($data['minimumRating']);
        }
        if (\array_key_exists('maximumRating', $data)) {
            $object->setMaximumRating($data['maximumRating']);
        }
        if (\array_key_exists('conditionalAnswer', $data)) {
            $object->setConditionalAnswer($data['conditionalAnswer']);
        }
        if (\array_key_exists('conditionalQuestions', $data)) {
            $values_1 = array();
            foreach ($data['conditionalQuestions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\ActivityQuestionModel', 'json', $context);
            }
            $object->setConditionalQuestions($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('questionId') && null !== $object->getQuestionId()) {
            $data['questionId'] = $object->getQuestionId();
        }
        if ($object->isInitialized('text') && null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if ($object->isInitialized('mandatory') && null !== $object->getMandatory()) {
            $data['mandatory'] = $object->getMandatory();
        }
        if ($object->isInitialized('possibleValues') && null !== $object->getPossibleValues()) {
            $values = array();
            foreach ($object->getPossibleValues() as $value) {
                $values[] = $value;
            }
            $data['possibleValues'] = $values;
        }
        if ($object->isInitialized('questionAnswerType') && null !== $object->getQuestionAnswerType()) {
            $data['questionAnswerType'] = $object->getQuestionAnswerType();
        }
        if ($object->isInitialized('minimumRating') && null !== $object->getMinimumRating()) {
            $data['minimumRating'] = $object->getMinimumRating();
        }
        if ($object->isInitialized('maximumRating') && null !== $object->getMaximumRating()) {
            $data['maximumRating'] = $object->getMaximumRating();
        }
        if ($object->isInitialized('conditionalAnswer') && null !== $object->getConditionalAnswer()) {
            $data['conditionalAnswer'] = $object->getConditionalAnswer();
        }
        if ($object->isInitialized('conditionalQuestions') && null !== $object->getConditionalQuestions()) {
            $values_1 = array();
            foreach ($object->getConditionalQuestions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['conditionalQuestions'] = $values_1;
        }
        return $data;
    }
}