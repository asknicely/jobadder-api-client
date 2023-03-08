<?php

namespace Varspool\JobAdder\V2\Model;

class ActivityQuestionModel
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $questionId;
    /**
     * 
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var bool
     */
    protected $mandatory;
    /**
     * 
     *
     * @var string[]
     */
    protected $possibleValues;
    /**
     * 
     *
     * @var string
     */
    protected $questionAnswerType;
    /**
     * 
     *
     * @var int
     */
    protected $minimumRating;
    /**
     * 
     *
     * @var int
     */
    protected $maximumRating;
    /**
     * 
     *
     * @var string
     */
    protected $conditionalAnswer;
    /**
     * 
     *
     * @var ActivityQuestionModel[]
     */
    protected $conditionalQuestions;
    /**
     * 
     *
     * @return int
     */
    public function getQuestionId() : int
    {
        return $this->questionId;
    }
    /**
     * 
     *
     * @param int $questionId
     *
     * @return self
     */
    public function setQuestionId(int $questionId) : self
    {
        $this->initialized['questionId'] = true;
        $this->questionId = $questionId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMandatory() : bool
    {
        return $this->mandatory;
    }
    /**
     * 
     *
     * @param bool $mandatory
     *
     * @return self
     */
    public function setMandatory(bool $mandatory) : self
    {
        $this->initialized['mandatory'] = true;
        $this->mandatory = $mandatory;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPossibleValues() : array
    {
        return $this->possibleValues;
    }
    /**
     * 
     *
     * @param string[] $possibleValues
     *
     * @return self
     */
    public function setPossibleValues(array $possibleValues) : self
    {
        $this->initialized['possibleValues'] = true;
        $this->possibleValues = $possibleValues;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuestionAnswerType() : string
    {
        return $this->questionAnswerType;
    }
    /**
     * 
     *
     * @param string $questionAnswerType
     *
     * @return self
     */
    public function setQuestionAnswerType(string $questionAnswerType) : self
    {
        $this->initialized['questionAnswerType'] = true;
        $this->questionAnswerType = $questionAnswerType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinimumRating() : int
    {
        return $this->minimumRating;
    }
    /**
     * 
     *
     * @param int $minimumRating
     *
     * @return self
     */
    public function setMinimumRating(int $minimumRating) : self
    {
        $this->initialized['minimumRating'] = true;
        $this->minimumRating = $minimumRating;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaximumRating() : int
    {
        return $this->maximumRating;
    }
    /**
     * 
     *
     * @param int $maximumRating
     *
     * @return self
     */
    public function setMaximumRating(int $maximumRating) : self
    {
        $this->initialized['maximumRating'] = true;
        $this->maximumRating = $maximumRating;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConditionalAnswer() : string
    {
        return $this->conditionalAnswer;
    }
    /**
     * 
     *
     * @param string $conditionalAnswer
     *
     * @return self
     */
    public function setConditionalAnswer(string $conditionalAnswer) : self
    {
        $this->initialized['conditionalAnswer'] = true;
        $this->conditionalAnswer = $conditionalAnswer;
        return $this;
    }
    /**
     * 
     *
     * @return ActivityQuestionModel[]
     */
    public function getConditionalQuestions() : array
    {
        return $this->conditionalQuestions;
    }
    /**
     * 
     *
     * @param ActivityQuestionModel[] $conditionalQuestions
     *
     * @return self
     */
    public function setConditionalQuestions(array $conditionalQuestions) : self
    {
        $this->initialized['conditionalQuestions'] = true;
        $this->conditionalQuestions = $conditionalQuestions;
        return $this;
    }
}