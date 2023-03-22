<?php

namespace Varspool\JobAdder\V2\Model;

class ActivityRatingValueDetailModel
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
     * @var float
     */
    protected $percentage;
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
     * @return float
     */
    public function getPercentage() : float
    {
        return $this->percentage;
    }
    /**
     * 
     *
     * @param float $percentage
     *
     * @return self
     */
    public function setPercentage(float $percentage) : self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
}