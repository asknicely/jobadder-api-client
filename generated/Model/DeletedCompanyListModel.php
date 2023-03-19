<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedCompanyListModel
{
    /**
     * 
     *
     * @var DeletedCompanyModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return DeletedCompanyModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param DeletedCompanyModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}