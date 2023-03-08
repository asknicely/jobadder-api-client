<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyWorkflowModel
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
    protected $workflowId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $archived;
    /**
     * 
     *
     * @var CompanyWorkflowApproverModel[]
     */
    protected $approvers;
    /**
     * 
     *
     * @return int
     */
    public function getWorkflowId() : int
    {
        return $this->workflowId;
    }
    /**
     * 
     *
     * @param int $workflowId
     *
     * @return self
     */
    public function setWorkflowId(int $workflowId) : self
    {
        $this->initialized['workflowId'] = true;
        $this->workflowId = $workflowId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
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
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * 
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived) : self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyWorkflowApproverModel[]
     */
    public function getApprovers() : array
    {
        return $this->approvers;
    }
    /**
     * 
     *
     * @param CompanyWorkflowApproverModel[] $approvers
     *
     * @return self
     */
    public function setApprovers(array $approvers) : self
    {
        $this->initialized['approvers'] = true;
        $this->approvers = $approvers;
        return $this;
    }
}