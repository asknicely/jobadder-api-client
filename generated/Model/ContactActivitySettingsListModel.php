<?php

namespace Varspool\JobAdder\V2\Model;

class ContactActivitySettingsListModel
{
    /**
     * 
     *
     * @var ContactActivitySettingSummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return ContactActivitySettingSummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param ContactActivitySettingSummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}