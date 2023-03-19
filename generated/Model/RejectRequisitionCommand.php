<?php

namespace Varspool\JobAdder\V2\Model;

class RejectRequisitionCommand
{
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
        $this->reason = $reason;
        return $this;
    }
}