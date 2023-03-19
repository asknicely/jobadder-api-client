<?php

namespace Varspool\JobAdder\V2\Model;

class UpdatePlacementPartnerActionCommand
{
    /**
     * Optional partner defined action status/progress
     *
     * @var string
     */
    protected $status;
    /**
     * Optional complete or partial results for a partner action
     *
     * @var PartnerActionResultCommandModel
     */
    protected $result;
    /**
     * Optional partner defined action status/progress
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Optional partner defined action status/progress
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Optional complete or partial results for a partner action
     *
     * @return PartnerActionResultCommandModel
     */
    public function getResult() : PartnerActionResultCommandModel
    {
        return $this->result;
    }
    /**
     * Optional complete or partial results for a partner action
     *
     * @param PartnerActionResultCommandModel $result
     *
     * @return self
     */
    public function setResult(PartnerActionResultCommandModel $result) : self
    {
        $this->result = $result;
        return $this;
    }
}