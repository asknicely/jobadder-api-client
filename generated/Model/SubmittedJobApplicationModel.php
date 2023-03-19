<?php

namespace Varspool\JobAdder\V2\Model;

class SubmittedJobApplicationModel
{
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
        $this->links = $links;
        return $this;
    }
}