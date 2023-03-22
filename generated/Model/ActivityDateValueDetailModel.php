<?php

namespace Varspool\JobAdder\V2\Model;

class ActivityDateValueDetailModel
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
     * @var \DateTime
     */
    protected $startDate;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $endDate;
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
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate) : self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate) : self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
}