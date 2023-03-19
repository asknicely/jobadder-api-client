<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementActivitySettingsListModel
{
    /**
     * 
     *
     * @var PlacementActivitySettingSummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return PlacementActivitySettingSummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param PlacementActivitySettingSummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}