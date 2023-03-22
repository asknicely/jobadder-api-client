<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedJobApplicationListModel
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
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}