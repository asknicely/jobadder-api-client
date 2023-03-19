<?php

namespace Varspool\JobAdder\V2\Model;

class ActivityDetailListModel
{
    /**
     * 
     *
     * @var ActivitySingleValueDetailModel[]
     */
    protected $textAnswers;
    /**
     * 
     *
     * @var ActivityListValueDetailModel[]
     */
    protected $listValueAnswers;
    /**
     * 
     *
     * @var ActivityDateValueDetailModel[]
     */
    protected $dateValueAnswers;
    /**
     * 
     *
     * @var ActivityRatingValueDetailModel[]
     */
    protected $ratingValueAnswers;
    /**
     * 
     *
     * @return ActivitySingleValueDetailModel[]
     */
    public function getTextAnswers() : array
    {
        return $this->textAnswers;
    }
    /**
     * 
     *
     * @param ActivitySingleValueDetailModel[] $textAnswers
     *
     * @return self
     */
    public function setTextAnswers(array $textAnswers) : self
    {
        $this->textAnswers = $textAnswers;
        return $this;
    }
    /**
     * 
     *
     * @return ActivityListValueDetailModel[]
     */
    public function getListValueAnswers() : array
    {
        return $this->listValueAnswers;
    }
    /**
     * 
     *
     * @param ActivityListValueDetailModel[] $listValueAnswers
     *
     * @return self
     */
    public function setListValueAnswers(array $listValueAnswers) : self
    {
        $this->listValueAnswers = $listValueAnswers;
        return $this;
    }
    /**
     * 
     *
     * @return ActivityDateValueDetailModel[]
     */
    public function getDateValueAnswers() : array
    {
        return $this->dateValueAnswers;
    }
    /**
     * 
     *
     * @param ActivityDateValueDetailModel[] $dateValueAnswers
     *
     * @return self
     */
    public function setDateValueAnswers(array $dateValueAnswers) : self
    {
        $this->dateValueAnswers = $dateValueAnswers;
        return $this;
    }
    /**
     * 
     *
     * @return ActivityRatingValueDetailModel[]
     */
    public function getRatingValueAnswers() : array
    {
        return $this->ratingValueAnswers;
    }
    /**
     * 
     *
     * @param ActivityRatingValueDetailModel[] $ratingValueAnswers
     *
     * @return self
     */
    public function setRatingValueAnswers(array $ratingValueAnswers) : self
    {
        $this->ratingValueAnswers = $ratingValueAnswers;
        return $this;
    }
}