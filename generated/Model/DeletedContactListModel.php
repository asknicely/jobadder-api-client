<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedContactListModel
{
    /**
     * 
     *
     * @var DeletedContactModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return DeletedContactModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param DeletedContactModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}