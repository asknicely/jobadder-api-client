<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitInterviewEvaluationRatingModel
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
        $this->initialized['criteria'] = true;
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
        $this->initialized['rating'] = true;
        $this->rating = $rating;
        return $this;
    }
}