<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationScreeningQuestionModel
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
    protected $answers;
    /**
     * 
     *
     * @var float
     */
    protected $score;
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
    public function getAnswers() : array
    {
        return $this->answers;
    }
    /**
     * 
     *
     * @param string[] $answers
     *
     * @return self
     */
    public function setAnswers(array $answers) : self
    {
        $this->answers = $answers;
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
        $this->score = $score;
        return $this;
    }
}