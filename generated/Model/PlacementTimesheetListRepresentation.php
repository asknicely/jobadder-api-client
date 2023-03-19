<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementTimesheetListRepresentation
{
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
        $this->items = $items;
        return $this;
    }
}