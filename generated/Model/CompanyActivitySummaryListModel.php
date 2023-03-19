<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyActivitySummaryListModel
{
    /**
     * 
     *
     * @var CompanyActivitySummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return CompanyActivitySummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param CompanyActivitySummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}