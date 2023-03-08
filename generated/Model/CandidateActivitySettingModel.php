<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateActivitySettingModel
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
        $this->initialized['settingId'] = true;
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
        $this->initialized['activityType'] = true;
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
        $this->initialized['name'] = true;
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
        $this->initialized['validStatuses'] = true;
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
        $this->initialized['statusMandatory'] = true;
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
        $this->initialized['questions'] = true;
        $this->questions = $questions;
        return $this;
    }
}