<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderActivitySummaryListModel
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
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}