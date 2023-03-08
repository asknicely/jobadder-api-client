<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedContactModel
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
    protected $contactId;
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
    public function getContactId() : int
    {
        return $this->contactId;
    }
    /**
     * 
     *
     * @param int $contactId
     *
     * @return self
     */
    public function setContactId(int $contactId) : self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;
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