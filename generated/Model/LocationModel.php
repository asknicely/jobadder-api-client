<?php

namespace Varspool\JobAdder\V2\Model;

class LocationModel
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var LocationAreaModel[]
     */
    protected $areas;
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
     * @return LocationAreaModel[]
     */
    public function getAreas() : array
    {
        return $this->areas;
    }
    /**
     * 
     *
     * @param LocationAreaModel[] $areas
     *
     * @return self
     */
    public function setAreas(array $areas) : self
    {
        $this->areas = $areas;
        return $this;
    }
}