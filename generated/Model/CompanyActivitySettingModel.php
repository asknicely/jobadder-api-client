<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyActivitySettingModel
{
    /**
     * 
     *
     * @var int
     */
    protected $settingId;
    /**
     * 
     *
     * @var string
     */
    protected $activityType;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var StatusModel[]
     */
    protected $validStatuses;
    /**
     * 
     *
     * @var bool
     */
    protected $statusMandatory;
    /**
     * 
     *
     * @var ActivityQuestionModel[]
     */
    protected $questions;
    /**
     * 
     *
     * @return int
     */
    public function getSettingId() : int
    {
        return $this->settingId;
    }
    /**
     * 
     *
     * @param int $settingId
     *
     * @return self
     */
    public function setSettingId(int $settingId) : self
    {
        $this->settingId = $settingId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActivityType() : string
    {
        return $this->activityType;
    }
    /**
     * 
     *
     * @param string $activityType
     *
     * @return self
     */
    public function setActivityType(string $activityType) : self
    {
        $this->activityType = $activityType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return StatusModel[]
     */
    public function getValidStatuses() : array
    {
        return $this->validStatuses;
    }
    /**
     * 
     *
     * @param StatusModel[] $validStatuses
     *
     * @return self
     */
    public function setValidStatuses(array $validStatuses) : self
    {
        $this->validStatuses = $validStatuses;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getStatusMandatory() : bool
    {
        return $this->statusMandatory;
    }
    /**
     * 
     *
     * @param bool $statusMandatory
     *
     * @return self
     */
    public function setStatusMandatory(bool $statusMandatory) : self
    {
        $this->statusMandatory = $statusMandatory;
        return $this;
    }
    /**
     * 
     *
     * @return ActivityQuestionModel[]
     */
    public function getQuestions() : array
    {
        return $this->questions;
    }
    /**
     * 
     *
     * @param ActivityQuestionModel[] $questions
     *
     * @return self
     */
    public function setQuestions(array $questions) : self
    {
        $this->questions = $questions;
        return $this;
    }
}