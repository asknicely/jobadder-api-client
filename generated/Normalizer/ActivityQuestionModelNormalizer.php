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
class ActivityQuestionModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Varspool\\JobAdder\\V2\\Model\\ActivityQuestionModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Varspool\\JobAdder\\V2\\Model\\ActivityQuestionModel';
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
        $object = new \Varspool\JobAdder\V2\Model\ActivityQuestionModel();
        if (property_exists($data, 'questionId')) {
            $object->setQuestionId($data->{'questionId'});
        }
        if (property_exists($data, 'text')) {
            $object->setText($data->{'text'});
        }
        if (property_exists($data, 'mandatory')) {
            $object->setMandatory($data->{'mandatory'});
        }
        if (property_exists($data, 'possibleValues')) {
            $values = array();
            foreach ($data->{'possibleValues'} as $value) {
                $values[] = $value;
            }
            $object->setPossibleValues($values);
        }
        if (property_exists($data, 'questionAnswerType')) {
            $object->setQuestionAnswerType($data->{'questionAnswerType'});
        }
        if (property_exists($data, 'minimumRating')) {
            $object->setMinimumRating($data->{'minimumRating'});
        }
        if (property_exists($data, 'maximumRating')) {
            $object->setMaximumRating($data->{'maximumRating'});
        }
        if (property_exists($data, 'conditionalAnswer')) {
            $object->setConditionalAnswer($data->{'conditionalAnswer'});
        }
        if (property_exists($data, 'conditionalQuestions')) {
            $values_1 = array();
            foreach ($data->{'conditionalQuestions'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Varspool\\JobAdder\\V2\\Model\\ActivityQuestionModel', 'json', $context);
            }
            $object->setConditionalQuestions($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getQuestionId()) {
            $data->{'questionId'} = $object->getQuestionId();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getMandatory()) {
            $data->{'mandatory'} = $object->getMandatory();
        }
        if (null !== $object->getPossibleValues()) {
            $values = array();
            foreach ($object->getPossibleValues() as $value) {
                $values[] = $value;
            }
            $data->{'possibleValues'} = $values;
        }
        if (null !== $object->getQuestionAnswerType()) {
            $data->{'questionAnswerType'} = $object->getQuestionAnswerType();
        }
        if (null !== $object->getMinimumRating()) {
            $data->{'minimumRating'} = $object->getMinimumRating();
        }
        if (null !== $object->getMaximumRating()) {
            $data->{'maximumRating'} = $object->getMaximumRating();
        }
        if (null !== $object->getConditionalAnswer()) {
            $data->{'conditionalAnswer'} = $object->getConditionalAnswer();
        }
        if (null !== $object->getConditionalQuestions()) {
            $values_1 = array();
            foreach ($object->getConditionalQuestions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'conditionalQuestions'} = $values_1;
        }
        return $data;
    }
}