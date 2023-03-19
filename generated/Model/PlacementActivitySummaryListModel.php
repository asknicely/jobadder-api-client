<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementActivitySummaryListModel
{
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
        $this->items = $items;
        return $this;
    }
}