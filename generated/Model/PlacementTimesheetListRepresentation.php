<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementTimesheetListRepresentation
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
     * @var PlacementTimesheetModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return PlacementTimesheetModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param PlacementTimesheetModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}