<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitLocationModel
{
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
        $this->areaId = $areaId;
        return $this;
    }
}