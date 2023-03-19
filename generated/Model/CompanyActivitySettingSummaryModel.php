<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyActivitySettingSummaryModel
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
}