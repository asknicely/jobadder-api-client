<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationStatusByWorkflowListRepresentation
{
    /**
     * 
     *
     * @var JobApplicationStatusByWorkflowModel[]
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
     * @return JobApplicationStatusByWorkflowModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param JobApplicationStatusByWorkflowModel[] $items
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