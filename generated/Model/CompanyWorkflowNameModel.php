<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyWorkflowNameModel
{
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
        $this->archived = $archived;
        return $this;
    }
}