<?php

namespace Varspool\JobAdder\V2\Model;

class PartnerActionStageModel
{
    /**
     * 
     *
     * @var string
     */
    protected $actionId;
    /**
     * 
     *
     * @var string
     */
    protected $actionName;
    /**
     * Unique partner defined reference/identifier for the action
     *
     * @var string
     */
    protected $reference;
    /**
     * 
     *
     * @var string
     */
    protected $stage;
    /**
     * Partner defined progress status message for the action
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var PartnerActionResultModel
     */
    protected $result;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $submittedAt;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $submittedBy;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $updatedBy;
    /**
     * 
     *
     * @return string
     */
    public function getActionId() : string
    {
        return $this->actionId;
    }
    /**
     * 
     *
     * @param string $actionId
     *
     * @return self
     */
    public function setActionId(string $actionId) : self
    {
        $this->actionId = $actionId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActionName() : string
    {
        return $this->actionName;
    }
    /**
     * 
     *
     * @param string $actionName
     *
     * @return self
     */
    public function setActionName(string $actionName) : self
    {
        $this->actionName = $actionName;
        return $this;
    }
    /**
     * Unique partner defined reference/identifier for the action
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * Unique partner defined reference/identifier for the action
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference) : self
    {
        $this->reference = $reference;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStage() : string
    {
        return $this->stage;
    }
    /**
     * 
     *
     * @param string $stage
     *
     * @return self
     */
    public function setStage(string $stage) : self
    {
        $this->stage = $stage;
        return $this;
    }
    /**
     * Partner defined progress status message for the action
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Partner defined progress status message for the action
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
     * 
     *
     * @return PartnerActionResultModel
     */
    public function getResult() : PartnerActionResultModel
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param PartnerActionResultModel $result
     *
     * @return self
     */
    public function setResult(PartnerActionResultModel $result) : self
    {
        $this->result = $result;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getSubmittedAt() : \DateTime
    {
        return $this->submittedAt;
    }
    /**
     * 
     *
     * @param \DateTime $submittedAt
     *
     * @return self
     */
    public function setSubmittedAt(\DateTime $submittedAt) : self
    {
        $this->submittedAt = $submittedAt;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getSubmittedBy() : UserNameModel
    {
        return $this->submittedBy;
    }
    /**
     * 
     *
     * @param UserNameModel $submittedBy
     *
     * @return self
     */
    public function setSubmittedBy(UserNameModel $submittedBy) : self
    {
        $this->submittedBy = $submittedBy;
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
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getUpdatedBy() : UserNameModel
    {
        return $this->updatedBy;
    }
    /**
     * 
     *
     * @param UserNameModel $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(UserNameModel $updatedBy) : self
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }
}