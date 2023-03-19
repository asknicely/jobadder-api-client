<?php

namespace Varspool\JobAdder\V2\Model;

class PartnerActionListRepresentation
{
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
        $this->links = $links;
        return $this;
    }
}