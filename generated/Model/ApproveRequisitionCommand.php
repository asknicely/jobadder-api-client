<?php

namespace Varspool\JobAdder\V2\Model;

class ApproveRequisitionCommand
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
    protected $message;
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
        $this->message = $message;
        return $this;
    }
}