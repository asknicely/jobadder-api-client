<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateActivityListRepresentation
{
    /**
     * 
     *
     * @var CandidateActivityModel[]
     */
    protected $items;
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var PageLinks
     */
    protected $links;
    /**
     * 
     *
     * @return CandidateActivityModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param CandidateActivityModel[] $items
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
     * @return int
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount) : self
    {
        $this->totalCount = $totalCount;
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