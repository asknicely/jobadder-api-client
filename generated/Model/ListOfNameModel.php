<?php

namespace Varspool\JobAdder\V2\Model;

class ListOfNameModel
{
    /**
     * 
     *
     * @var NameModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return NameModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param NameModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}