<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementAttachmentCategoryListRepresentation
{
    /**
     * 
     *
     * @var PlacementAttachmentCategoryModel[]
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
     * @return PlacementAttachmentCategoryModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param PlacementAttachmentCategoryModel[] $items
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