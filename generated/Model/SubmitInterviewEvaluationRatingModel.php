<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitInterviewEvaluationRatingModel
{
    /**
     * 
     *
     * @var string
     */
    protected $criteria;
    /**
     * 
     *
     * @var int
     */
    protected $rating;
    /**
     * 
     *
     * @return string
     */
    public function getCriteria() : string
    {
        return $this->criteria;
    }
    /**
     * 
     *
     * @param string $criteria
     *
     * @return self
     */
    public function setCriteria(string $criteria) : self
    {
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRating() : int
    {
        return $this->rating;
    }
    /**
     * 
     *
     * @param int $rating
     *
     * @return self
     */
    public function setRating(int $rating) : self
    {
        $this->rating = $rating;
        return $this;
    }
}