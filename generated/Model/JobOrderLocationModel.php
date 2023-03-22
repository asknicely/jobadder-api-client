<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderLocationModel
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var JobOrderLocationAreaModel
     */
    protected $area;
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
     * @return JobOrderLocationAreaModel
     */
    public function getArea() : JobOrderLocationAreaModel
    {
        return $this->area;
    }
    /**
     * 
     *
     * @param JobOrderLocationAreaModel $area
     *
     * @return self
     */
    public function setArea(JobOrderLocationAreaModel $area) : self
    {
        $this->initialized['area'] = true;
        $this->area = $area;
        return $this;
    }
}