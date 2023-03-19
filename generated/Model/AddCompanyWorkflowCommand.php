<?php

namespace Varspool\JobAdder\V2\Model;

class AddCompanyWorkflowCommand
{
    /**
     * Approvers for this workflow. Only the specified workflow stages will be updated, each stageIndex can be specified once.
     *
     * @var SubmitCompanyWorkflowApproverModel[]
     */
    protected $approvers;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * Approvers for this workflow. Only the specified workflow stages will be updated, each stageIndex can be specified once.
     *
     * @return SubmitCompanyWorkflowApproverModel[]
     */
    public function getApprovers() : array
    {
        return $this->approvers;
    }
    /**
     * Approvers for this workflow. Only the specified workflow stages will be updated, each stageIndex can be specified once.
     *
     * @param SubmitCompanyWorkflowApproverModel[] $approvers
     *
     * @return self
     */
    public function setApprovers(array $approvers) : self
    {
        $this->approvers = $approvers;
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
        $this->name = $name;
        return $this;
    }
}