<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderActivitySettingSummaryModel
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
}