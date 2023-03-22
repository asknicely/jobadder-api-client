<?php

namespace Varspool\JobAdder\V2\Model;

class SubmittedJobApplicationModel
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
     * @var int
     */
    protected $applicationId;
    /**
     * 
     *
     * @var SubmittedJobApplicationLinks
     */
    protected $links;
    /**
     * 
     *
     * @return int
     */
    public function getApplicationId() : int
    {
        return $this->applicationId;
    }
    /**
     * 
     *
     * @param int $applicationId
     *
     * @return self
     */
    public function setApplicationId(int $applicationId) : self
    {
        $this->initialized['applicationId'] = true;
        $this->applicationId = $applicationId;
        return $this;
    }
    /**
     * 
     *
     * @return SubmittedJobApplicationLinks
     */
    public function getLinks() : SubmittedJobApplicationLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param SubmittedJobApplicationLinks $links
     *
     * @return self
     */
    public function setLinks(SubmittedJobApplicationLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}