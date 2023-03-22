<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyNameModel
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
     * Unique identifier for the company
     *
     * @var int
     */
    protected $companyId;
    /**
     * Company name
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var StatusModel
     */
    protected $status;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $owner;
    /**
     * Unique identifier for the company
     *
     * @return int
     */
    public function getCompanyId() : int
    {
        return $this->companyId;
    }
    /**
     * Unique identifier for the company
     *
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId(int $companyId) : self
    {
        $this->initialized['companyId'] = true;
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * Company name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Company name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return StatusModel
     */
    public function getStatus() : StatusModel
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param StatusModel $status
     *
     * @return self
     */
    public function setStatus(StatusModel $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getOwner() : UserNameModel
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param UserNameModel $owner
     *
     * @return self
     */
    public function setOwner(UserNameModel $owner) : self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
}