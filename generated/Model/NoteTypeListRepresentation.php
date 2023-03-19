<?php

namespace Varspool\JobAdder\V2\Model;

class NoteTypeListRepresentation
{
    /**
     * 
     *
     * @var NoteTypeModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return NoteTypeModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param NoteTypeModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}