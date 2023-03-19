<?php

namespace Varspool\JobAdder\V2\Model;

class ContactActivitySummaryListModel
{
    /**
     * 
     *
     * @var ContactActivitySummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return ContactActivitySummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param ContactActivitySummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}