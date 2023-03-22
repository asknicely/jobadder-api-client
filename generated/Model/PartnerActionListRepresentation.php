<?php

namespace Varspool\JobAdder\V2\Model;

class PartnerActionListRepresentation
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
     * Partner actions
     *
     * @var PartnerActionModel[]
     */
    protected $items;
    /**
     * 
     *
     * @var ModelLinks
     */
    protected $links;
    /**
     * Partner actions
     *
     * @return PartnerActionModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Partner actions
     *
     * @param PartnerActionModel[] $items
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