<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedCandidateListModel
{
    /**
     * 
     *
     * @var DeletedCandidateModel[]
     */
    protected $items;
    /**
     * 
     *
     * @return DeletedCandidateModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param DeletedCandidateModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}