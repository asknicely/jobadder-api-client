<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderActivitySettingsListModel
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
     * @var JobOrderActivitySettingSummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return JobOrderActivitySettingSummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param JobOrderActivitySettingSummaryModel[] $items
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