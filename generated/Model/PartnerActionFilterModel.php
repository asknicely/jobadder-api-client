<?php

namespace Varspool\JobAdder\V2\Model;

class PartnerActionFilterModel
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
     * Action is available to admin users only
     *
     * @var bool
     */
    protected $adminOnly;
    /**
     * Action is only available on approved entities (currently only supported for placements)
     *
     * @var bool
     */
    protected $approvedOnly;
    /**
     * 
     *
     * @var PartnerActionStatusFilterModel
     */
    protected $status;
    /**
     * Action is available to admin users only
     *
     * @return bool
     */
    public function getAdminOnly() : bool
    {
        return $this->adminOnly;
    }
    /**
     * Action is available to admin users only
     *
     * @param bool $adminOnly
     *
     * @return self
     */
    public function setAdminOnly(bool $adminOnly) : self
    {
        $this->initialized['adminOnly'] = true;
        $this->adminOnly = $adminOnly;
        return $this;
    }
    /**
     * Action is only available on approved entities (currently only supported for placements)
     *
     * @return bool
     */
    public function getApprovedOnly() : bool
    {
        return $this->approvedOnly;
    }
    /**
     * Action is only available on approved entities (currently only supported for placements)
     *
     * @param bool $approvedOnly
     *
     * @return self
     */
    public function setApprovedOnly(bool $approvedOnly) : self
    {
        $this->initialized['approvedOnly'] = true;
        $this->approvedOnly = $approvedOnly;
        return $this;
    }
    /**
     * 
     *
     * @return PartnerActionStatusFilterModel
     */
    public function getStatus() : PartnerActionStatusFilterModel
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param PartnerActionStatusFilterModel $status
     *
     * @return self
     */
    public function setStatus(PartnerActionStatusFilterModel $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}