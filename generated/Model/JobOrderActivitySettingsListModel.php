<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderActivitySettingsListModel
{
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
        $this->items = $items;
        return $this;
    }
}