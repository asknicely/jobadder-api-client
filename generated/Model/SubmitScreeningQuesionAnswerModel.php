<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitScreeningQuesionAnswerModel
{
    /**
     * 
     *
     * @var string
     */
    protected $question;
    /**
     * Text or List value answer for this screening question (depending on the question `answerType`)
     *
     * @var mixed
     */
    protected $answer;
    /**
     * Optional score for this answer
     *
     * @var int
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
     * Text or List value answer for this screening question (depending on the question `answerType`)
     *
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->answer;
    }
    /**
     * Text or List value answer for this screening question (depending on the question `answerType`)
     *
     * @param mixed $answer
     *
     * @return self
     */
    public function setAnswer($answer) : self
    {
        $this->answer = $answer;
        return $this;
    }
    /**
     * Optional score for this answer
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * Optional score for this answer
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->score = $score;
        return $this;
    }
}