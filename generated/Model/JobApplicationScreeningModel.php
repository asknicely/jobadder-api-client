<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationScreeningModel
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
     * @var JobApplicationScreeningQuestionModel[]
     */
    protected $questions;
    /**
     * 
     *
     * @var float
     */
    protected $score;
    /**
     * 
     *
     * @return JobApplicationScreeningQuestionModel[]
     */
    public function getQuestions() : array
    {
        return $this->questions;
    }
    /**
     * 
     *
     * @param JobApplicationScreeningQuestionModel[] $questions
     *
     * @return self
     */
    public function setQuestions(array $questions) : self
    {
        $this->initialized['questions'] = true;
        $this->questions = $questions;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getScore() : float
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param float $score
     *
     * @return self
     */
    public function setScore(float $score) : self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
}