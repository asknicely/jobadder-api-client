<?php

namespace Varspool\JobAdder\V2\Model;

class WebhookEventStatusChangeFilterModel
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
     * Limit events to a specific status
     *
     * @var int[]
     */
    protected $statusId;
    /**
     * Limit events to an active/open status
     *
     * @var bool
     */
    protected $statusActive;
    /**
     * Limit events to a specific status
     *
     * @return int[]
     */
    public function getStatusId() : array
    {
        return $this->statusId;
    }
    /**
     * Limit events to a specific status
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
    /**
     * Limit events to an active/open status
     *
     * @return bool
     */
    public function getStatusActive() : bool
    {
        return $this->statusActive;
    }
    /**
     * Limit events to an active/open status
     *
     * @param bool $statusActive
     *
     * @return self
     */
    public function setStatusActive(bool $statusActive) : self
    {
        $this->initialized['statusActive'] = true;
        $this->statusActive = $statusActive;
        return $this;
    }
}