<?php

namespace Varspool\JobAdder\V2\Model;

class ContactActivitySettingsListModel
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
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}