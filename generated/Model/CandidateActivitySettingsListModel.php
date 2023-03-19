<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateActivitySettingsListModel
{
    /**
     * 
     *
     * @var CandidateActivitySettingSummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return CandidateActivitySettingSummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param CandidateActivitySettingSummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}