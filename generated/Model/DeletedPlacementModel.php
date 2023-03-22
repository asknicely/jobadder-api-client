<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedPlacementModel
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
    protected $placementId;
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
    public function getPlacementId() : int
    {
        return $this->placementId;
    }
    /**
     * 
     *
     * @param int $placementId
     *
     * @return self
     */
    public function setPlacementId(int $placementId) : self
    {
        $this->initialized['placementId'] = true;
        $this->placementId = $placementId;
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