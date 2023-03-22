<?php

namespace Varspool\JobAdder\V2\Model;

class CandidateAvailabilityListRepresentation
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
     * @var CandidateAvailabilityModel[]
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
     * @return CandidateAvailabilityModel[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param CandidateAvailabilityModel[] $items
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