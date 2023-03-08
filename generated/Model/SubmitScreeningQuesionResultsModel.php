<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitScreeningQuesionResultsModel
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
     * @var SubmitScreeningQuesionAnswerModel[]
     */
    protected $answers;
    /**
     * Optional overall score for these screening results
     *
     * @var int
     */
    protected $score;
    /**
     * 
     *
     * @return SubmitScreeningQuesionAnswerModel[]
     */
    public function getAnswers() : array
    {
        return $this->answers;
    }
    /**
     * 
     *
     * @param SubmitScreeningQuesionAnswerModel[] $answers
     *
     * @return self
     */
    public function setAnswers(array $answers) : self
    {
        $this->initialized['answers'] = true;
        $this->answers = $answers;
        return $this;
    }
    /**
     * Optional overall score for these screening results
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * Optional overall score for these screening results
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
}