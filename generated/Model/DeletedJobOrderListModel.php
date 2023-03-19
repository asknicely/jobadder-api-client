<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedJobOrderListModel
{
    /**
     * 
     *
     * @var DeletedJobOrderModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return DeletedJobOrderModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param DeletedJobOrderModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}