<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCompanyWorkflowApproverModel
{
    /**
     * 
     *
     * @var int
     */
    protected $stageIndex;
    /**
     * 
     *
     * @var int[]
     */
    protected $contactId;
    /**
     * 
     *
     * @return int
     */
    public function getStageIndex() : int
    {
        return $this->stageIndex;
    }
    /**
     * 
     *
     * @param int $stageIndex
     *
     * @return self
     */
    public function setStageIndex(int $stageIndex) : self
    {
        $this->stageIndex = $stageIndex;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getContactId() : array
    {
        return $this->contactId;
    }
    /**
     * 
     *
     * @param int[] $contactId
     *
     * @return self
     */
    public function setContactId(array $contactId) : self
    {
        $this->contactId = $contactId;
        return $this;
    }
}