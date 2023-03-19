<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedPlacementListModel
{
    /**
     * 
     *
     * @var DeletedPlacementModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return DeletedPlacementModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param DeletedPlacementModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}