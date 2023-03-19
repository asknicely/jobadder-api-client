<?php

namespace Varspool\JobAdder\V2\Model;

class ActivityListValueDetailModel
{
    /**
     * 
     *
     * @var string
     */
    protected $question;
    /**
     * 
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
     * 
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * 
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