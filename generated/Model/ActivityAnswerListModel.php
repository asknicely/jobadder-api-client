<?php

namespace Varspool\JobAdder\V2\Model;

class ActivityAnswerListModel
{
    /**
     * 
     *
     * @var ActivityTextAnswerModel[]
     */
    protected $textAnswers;
    /**
     * 
     *
     * @var ActivityListValueAnswerModel[]
     */
    protected $listValueAnswers;
    /**
     * 
     *
     * @var ActivityDateRangeAnswerModel[]
     */
    protected $dateRangeValueAnswers;
    /**
     * 
     *
     * @var ActivityRatingAnswerModel[]
     */
    protected $ratingValueAnswers;
    /**
     * 
     *
     * @return ActivityTextAnswerModel[]
     */
    public function getTextAnswers() : array
    {
        return $this->textAnswers;
    }
    /**
     * 
     *
     * @param ActivityTextAnswerModel[] $textAnswers
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
     * @return ActivityListValueAnswerModel[]
     */
    public function getListValueAnswers() : array
    {
        return $this->listValueAnswers;
    }
    /**
     * 
     *
     * @param ActivityListValueAnswerModel[] $listValueAnswers
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
     * @return ActivityDateRangeAnswerModel[]
     */
    public function getDateRangeValueAnswers() : array
    {
        return $this->dateRangeValueAnswers;
    }
    /**
     * 
     *
     * @param ActivityDateRangeAnswerModel[] $dateRangeValueAnswers
     *
     * @return self
     */
    public function setDateRangeValueAnswers(array $dateRangeValueAnswers) : self
    {
        $this->dateRangeValueAnswers = $dateRangeValueAnswers;
        return $this;
    }
    /**
     * 
     *
     * @return ActivityRatingAnswerModel[]
     */
    public function getRatingValueAnswers() : array
    {
        return $this->ratingValueAnswers;
    }
    /**
     * 
     *
     * @param ActivityRatingAnswerModel[] $ratingValueAnswers
     *
     * @return self
     */
    public function setRatingValueAnswers(array $ratingValueAnswers) : self
    {
        $this->ratingValueAnswers = $ratingValueAnswers;
        return $this;
    }
}