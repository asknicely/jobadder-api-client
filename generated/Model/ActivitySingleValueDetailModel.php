<?php

namespace Varspool\JobAdder\V2\Model;

class ActivitySingleValueDetailModel
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
     * @var string
     */
    protected $question;
    /**
     * 
     *
     * @var string
     */
    protected $answer;
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
        $this->initialized['question'] = true;
        $this->question = $question;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAnswer() : string
    {
        return $this->answer;
    }
    /**
     * 
     *
     * @param string $answer
     *
     * @return self
     */
    public function setAnswer(string $answer) : self
    {
        $this->initialized['answer'] = true;
        $this->answer = $answer;
        return $this;
    }
}