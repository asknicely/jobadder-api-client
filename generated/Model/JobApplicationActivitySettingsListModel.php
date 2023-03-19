<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationActivitySettingsListModel
{
    /**
     * 
     *
     * @var JobApplicationActivitySettingSummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return JobApplicationActivitySettingSummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param JobApplicationActivitySettingSummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}