<?php

namespace Varspool\JobAdder\V2\Model;

class InterviewEvaluationRatingModel
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
     * Criteria being rated
     *
     * @var string
     */
    protected $criteria;
    /**
     * Criteria rating, from 0 to 100
     *
     * @var int
     */
    protected $rating;
    /**
     * Criteria being rated
     *
     * @return string
     */
    public function getCriteria() : string
    {
        return $this->criteria;
    }
    /**
     * Criteria being rated
     *
     * @param string $criteria
     *
     * @return self
     */
    public function setCriteria(string $criteria) : self
    {
        $this->initialized['criteria'] = true;
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * Criteria rating, from 0 to 100
     *
     * @return int
     */
    public function getRating() : int
    {
        return $this->rating;
    }
    /**
     * Criteria rating, from 0 to 100
     *
     * @param int $rating
     *
     * @return self
     */
    public function setRating(int $rating) : self
    {
        $this->initialized['rating'] = true;
        $this->rating = $rating;
        return $this;
    }
}