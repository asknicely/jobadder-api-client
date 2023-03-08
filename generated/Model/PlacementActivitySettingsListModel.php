<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementActivitySettingsListModel
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
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}