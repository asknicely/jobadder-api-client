<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationStatusRepresentation
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
     * @var JobApplicationStatusLinks
     */
    protected $links;
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
        $this->initialized['statusId'] = true;
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
        $this->initialized['name'] = true;
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
        $this->initialized['active'] = true;
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
        $this->initialized['rejected'] = true;
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
        $this->initialized['default'] = true;
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
        $this->initialized['defaultRejected'] = true;
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
        $this->initialized['workflow'] = true;
        $this->workflow = $workflow;
        return $this;
    }
    /**
     * 
     *
     * @return JobApplicationStatusLinks
     */
    public function getLinks() : JobApplicationStatusLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param JobApplicationStatusLinks $links
     *
     * @return self
     */
    public function setLinks(JobApplicationStatusLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}