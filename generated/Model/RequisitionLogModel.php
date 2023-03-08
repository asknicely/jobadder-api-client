<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionLogModel
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
     * @var ContactNameModel
     */
    protected $contact;
    /**
     * 
     *
     * @var string
     */
    protected $oldStatus;
    /**
     * 
     *
     * @var string
     */
    protected $newStatus;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return ContactNameModel
     */
    public function getContact() : ContactNameModel
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param ContactNameModel $contact
     *
     * @return self
     */
    public function setContact(ContactNameModel $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOldStatus() : string
    {
        return $this->oldStatus;
    }
    /**
     * 
     *
     * @param string $oldStatus
     *
     * @return self
     */
    public function setOldStatus(string $oldStatus) : self
    {
        $this->initialized['oldStatus'] = true;
        $this->oldStatus = $oldStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNewStatus() : string
    {
        return $this->newStatus;
    }
    /**
     * 
     *
     * @param string $newStatus
     *
     * @return self
     */
    public function setNewStatus(string $newStatus) : self
    {
        $this->initialized['newStatus'] = true;
        $this->newStatus = $newStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}