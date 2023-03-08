<?php

namespace Varspool\JobAdder\V2\Model;

class WorkTypeListRepresentation
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
     * @var WorkTypeModel[]
     */
    protected $items;
    /**
     * 
     *
     * @var ModelLinks
     */
    protected $links;
    /**
     * 
     *
     * @return WorkTypeModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param WorkTypeModel[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return ModelLinks
     */
    public function getLinks() : ModelLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param ModelLinks $links
     *
     * @return self
     */
    public function setLinks(ModelLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}