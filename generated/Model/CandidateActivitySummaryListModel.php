<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateActivitySummaryListModel
{
    /**
     * 
     *
     * @var CandidateActivitySummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return CandidateActivitySummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param CandidateActivitySummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}