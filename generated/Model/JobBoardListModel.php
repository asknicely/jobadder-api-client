<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardListModel
{
    /**
     * 
     *
     * @var JobBoardSummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return JobBoardSummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param JobBoardSummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}