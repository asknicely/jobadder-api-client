<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedJobApplicationListModel
{
    /**
     * 
     *
     * @var DeletedJobApplicationModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return DeletedJobApplicationModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param DeletedJobApplicationModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}