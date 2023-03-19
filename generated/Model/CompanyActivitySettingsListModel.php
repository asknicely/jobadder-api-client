<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyActivitySettingsListModel
{
    /**
     * 
     *
     * @var CompanyActivitySettingSummaryModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return CompanyActivitySettingSummaryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param CompanyActivitySettingSummaryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}