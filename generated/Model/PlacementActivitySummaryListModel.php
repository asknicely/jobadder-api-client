<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementActivitySummaryListModel
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
     * @var PlacementActivitySummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return PlacementActivitySummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param PlacementActivitySummaryModel[] $items
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