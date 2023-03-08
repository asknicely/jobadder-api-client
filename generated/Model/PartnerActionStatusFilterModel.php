<?php

namespace Varspool\JobAdder\V2\Model;

class PartnerActionStatusFilterModel
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
     * Action is available to entities with an active status
     *
     * @var bool
     */
    protected $activeOnly;
    /**
     * Action is available to entities with a specific status
     *
     * @var int[]
     */
    protected $statusId;
    /**
     * Action is available to entities with an active status
     *
     * @return bool
     */
    public function getActiveOnly() : bool
    {
        return $this->activeOnly;
    }
    /**
     * Action is available to entities with an active status
     *
     * @param bool $activeOnly
     *
     * @return self
     */
    public function setActiveOnly(bool $activeOnly) : self
    {
        $this->initialized['activeOnly'] = true;
        $this->activeOnly = $activeOnly;
        return $this;
    }
    /**
     * Action is available to entities with a specific status
     *
     * @return int[]
     */
    public function getStatusId() : array
    {
        return $this->statusId;
    }
    /**
     * Action is available to entities with a specific status
     *
     * @param int[] $statusId
     *
     * @return self
     */
    public function setStatusId(array $statusId) : self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
}