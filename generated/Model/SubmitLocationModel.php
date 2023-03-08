<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitLocationModel
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
    protected $locationId;
    /**
     * 
     *
     * @var int
     */
    protected $areaId;
    /**
     * 
     *
     * @return int
     */
    public function getLocationId() : int
    {
        return $this->locationId;
    }
    /**
     * 
     *
     * @param int $locationId
     *
     * @return self
     */
    public function setLocationId(int $locationId) : self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAreaId() : int
    {
        return $this->areaId;
    }
    /**
     * 
     *
     * @param int $areaId
     *
     * @return self
     */
    public function setAreaId(int $areaId) : self
    {
        $this->initialized['areaId'] = true;
        $this->areaId = $areaId;
        return $this;
    }
}