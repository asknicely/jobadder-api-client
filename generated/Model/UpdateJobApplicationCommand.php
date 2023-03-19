<?php

namespace Varspool\JobAdder\V2\Model;

class UpdateJobApplicationCommand
{
    /**
     * Job application status
     *
     * @var int
     */
    protected $statusId;
    /**
     * Job application rating
     *
     * @var int
     */
    protected $rating;
    /**
     * 
     *
     * @var SubmitCustomFieldValueModel[]
     */
    protected $custom;
    /**
     * Job application status
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * Job application status
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * Job application rating
     *
     * @return int
     */
    public function getRating() : int
    {
        return $this->rating;
    }
    /**
     * Job application rating
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
    /**
     * 
     *
     * @return SubmitCustomFieldValueModel[]
     */
    public function getCustom() : array
    {
        return $this->custom;
    }
    /**
     * 
     *
     * @param SubmitCustomFieldValueModel[] $custom
     *
     * @return self
     */
    public function setCustom(array $custom) : self
    {
        $this->custom = $custom;
        return $this;
    }
}