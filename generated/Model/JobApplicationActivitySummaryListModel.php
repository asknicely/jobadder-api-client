<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationActivitySummaryListModel
{
    /**
     * 
     *
     * @var JobApplicationActivitySummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return JobApplicationActivitySummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param JobApplicationActivitySummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}