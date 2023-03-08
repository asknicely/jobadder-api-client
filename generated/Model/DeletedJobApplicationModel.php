<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedJobApplicationModel
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
     * @var \DateTime
     */
    protected $deletedAt;
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
     * @return \DateTime
     */
    public function getDeletedAt() : \DateTime
    {
        return $this->deletedAt;
    }
    /**
     * 
     *
     * @param \DateTime $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt) : self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}