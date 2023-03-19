<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationStatusModel
{
    /**
     * 
     *
     * @var int
     */
    protected $statusId;
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
    protected $active;
    /**
     * 
     *
     * @var bool
     */
    protected $rejected;
    /**
     * 
     *
     * @var bool
     */
    protected $default;
    /**
     * 
     *
     * @var bool
     */
    protected $defaultRejected;
    /**
     * 
     *
     * @var JobApplicationWorkflowModel
     */
    protected $workflow;
    /**
     * 
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * 
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->statusId = $statusId;
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
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRejected() : bool
    {
        return $this->rejected;
    }
    /**
     * 
     *
     * @param bool $rejected
     *
     * @return self
     */
    public function setRejected(bool $rejected) : self
    {
        $this->rejected = $rejected;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDefault() : bool
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault(bool $default) : self
    {
        $this->default = $default;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDefaultRejected() : bool
    {
        return $this->defaultRejected;
    }
    /**
     * 
     *
     * @param bool $defaultRejected
     *
     * @return self
     */
    public function setDefaultRejected(bool $defaultRejected) : self
    {
        $this->defaultRejected = $defaultRejected;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationWorkflowModel
     */
    public function getWorkflow() : JobApplicationWorkflowModel
    {
        return $this->workflow;
    }
    /**
     * 
     *
     * @param JobApplicationWorkflowModel $workflow
     *
     * @return self
     */
    public function setWorkflow(JobApplicationWorkflowModel $workflow) : self
    {
        $this->workflow = $workflow;
        return $this;
    }
}