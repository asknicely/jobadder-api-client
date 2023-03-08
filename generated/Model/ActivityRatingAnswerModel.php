<?php

namespace Varspool\JobAdder\V2\Model;

class ActivityRatingAnswerModel
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
     * @var int
     */
    protected $questionId;
    /**
     * 
     *
     * @var int
     */
    protected $rating;
    /**
     * 
     *
     * @return int
     */
    public function getQuestionId() : int
    {
        return $this->questionId;
    }
    /**
     * 
     *
     * @param int $questionId
     *
     * @return self
     */
    public function setQuestionId(int $questionId) : self
    {
        $this->initialized['questionId'] = true;
        $this->questionId = $questionId;
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