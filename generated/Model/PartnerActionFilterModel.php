<?php

namespace Varspool\JobAdder\V2\Model;

class PartnerActionFilterModel
{
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
        $this->status = $status;
        return $this;
    }
}