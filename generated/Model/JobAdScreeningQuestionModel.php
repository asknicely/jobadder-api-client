<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdScreeningQuestionModel
{
    /**
     * 
     *
     * @var string
     */
    protected $question;
    /**
    * The type of expected answer\
    `"Text"` free text\
    `"List"` select one or more `values` from a predefined list
    *
    * @var string
    */
    protected $answerType;
    /**
     * Field is mandatory and a value must be provided
     *
     * @var bool
     */
    protected $mandatory;
    /**
     * Maximum length of a text field
     *
     * @var int
     */
    protected $maxLength;
    /**
     * List selection allows multiple values
     *
     * @var bool
     */
    protected $multiSelect;
    /**
     * List of predefined values to select from
     *
     * @var string[]
     */
    protected $values;
    /**
     * 
     *
     * @return string
     */
    public function getQuestion() : string
    {
        return $this->question;
    }
    /**
     * 
     *
     * @param string $question
     *
     * @return self
     */
    public function setQuestion(string $question) : self
    {
        $this->question = $question;
        return $this;
    }
    /**
    * The type of expected answer\
    `"Text"` free text\
    `"List"` select one or more `values` from a predefined list
    *
    * @return string
    */
    public function getAnswerType() : string
    {
        return $this->answerType;
    }
    /**
    * The type of expected answer\
    `"Text"` free text\
    `"List"` select one or more `values` from a predefined list
    *
    * @param string $answerType
    *
    * @return self
    */
    public function setAnswerType(string $answerType) : self
    {
        $this->answerType = $answerType;
        return $this;
    }
    /**
     * Field is mandatory and a value must be provided
     *
     * @return bool
     */
    public function getMandatory() : bool
    {
        return $this->mandatory;
    }
    /**
     * Field is mandatory and a value must be provided
     *
     * @param bool $mandatory
     *
     * @return self
     */
    public function setMandatory(bool $mandatory) : self
    {
        $this->mandatory = $mandatory;
        return $this;
    }
    /**
     * Maximum length of a text field
     *
     * @return int
     */
    public function getMaxLength() : int
    {
        return $this->maxLength;
    }
    /**
     * Maximum length of a text field
     *
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength(int $maxLength) : self
    {
        $this->maxLength = $maxLength;
        return $this;
    }
    /**
     * List selection allows multiple values
     *
     * @return bool
     */
    public function getMultiSelect() : bool
    {
        return $this->multiSelect;
    }
    /**
     * List selection allows multiple values
     *
     * @param bool $multiSelect
     *
     * @return self
     */
    public function setMultiSelect(bool $multiSelect) : self
    {
        $this->multiSelect = $multiSelect;
        return $this;
    }
    /**
     * List of predefined values to select from
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * List of predefined values to select from
     *
     * @param string[] $values
     *
     * @return self
     */
    public function setValues(array $values) : self
    {
        $this->values = $values;
        return $this;
    }
}