<?php

namespace Varspool\JobAdder\V2\Model;

class InterviewLinks
{
    /**
     * 
     *
     * @var string
     */
    protected $self;
    /**
     * Evaluations and ratings
     *
     * @var string
     */
    protected $evaluations;
    /**
     * 
     *
     * @return string
     */
    public function getSelf() : string
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * Evaluations and ratings
     *
     * @return string
     */
    public function getEvaluations() : string
    {
        return $this->evaluations;
    }
    /**
     * Evaluations and ratings
     *
     * @param string $evaluations
     *
     * @return self
     */
    public function setEvaluations(string $evaluations) : self
    {
        $this->evaluations = $evaluations;
        return $this;
    }
}