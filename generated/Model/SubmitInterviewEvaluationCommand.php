<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitInterviewEvaluationCommand
{
    /**
     * 
     *
     * @var string
     */
    protected $comments;
    /**
     * 
     *
     * @var SubmitInterviewEvaluationRatingModel[]
     */
    protected $rating;
    /**
     * 
     *
     * @return string
     */
    public function getComments() : string
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments) : self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return SubmitInterviewEvaluationRatingModel[]
     */
    public function getRating() : array
    {
        return $this->rating;
    }
    /**
     * 
     *
     * @param SubmitInterviewEvaluationRatingModel[] $rating
     *
     * @return self
     */
    public function setRating(array $rating) : self
    {
        $this->rating = $rating;
        return $this;
    }
}