<?php

namespace Varspool\JobAdder\V2\Model;

class RejectRequisitionCommand
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
    protected $approverId;
    /**
     * 
     *
     * @var string
     */
    protected $reason;
    /**
     * 
     *
     * @return int
     */
    public function getApproverId() : int
    {
        return $this->approverId;
    }
    /**
     * 
     *
     * @param int $approverId
     *
     * @return self
     */
    public function setApproverId(int $approverId) : self
    {
        $this->initialized['approverId'] = true;
        $this->approverId = $approverId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
}