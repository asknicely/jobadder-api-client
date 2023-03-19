<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderActivitySummaryListModel
{
    /**
     * 
     *
     * @var JobOrderActivitySummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return JobOrderActivitySummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param JobOrderActivitySummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}