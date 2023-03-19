<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateVideoListRepresentation
{
    /**
     * 
     *
     * @var CandidateVideoModel[]
     */
    protected $items;
    /**
     * 
     *
     * @var PageLinks
     */
    protected $links;
    /**
     * 
     *
     * @return CandidateVideoModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param CandidateVideoModel[] $items
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
     * @return PageLinks
     */
    public function getLinks() : PageLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param PageLinks $links
     *
     * @return self
     */
    public function setLinks(PageLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}