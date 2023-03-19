<?php

namespace Varspool\JobAdder\V2\Model;

class RequisitionLinks
{
    /**
     * 
     *
     * @var string
     */
    protected $self;
    /**
     * 
     *
     * @var string
     */
    protected $workflow;
    /**
     * Link to job created for an approved requisition
     *
     * @var string
     */
    protected $job;
    /**
     * Link to requisition approval history
     *
     * @var string
     */
    protected $history;
    /**
     * Notes
     *
     * @var string
     */
    protected $notes;
    /**
     * 
     *
     * @return string
     */
    public function getSelf() : string
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWorkflow() : string
    {
        return $this->workflow;
    }
    /**
     * 
     *
     * @param string $workflow
     *
     * @return self
     */
    public function setWorkflow(string $workflow) : self
    {
        $this->workflow = $workflow;
        return $this;
    }
    /**
     * Link to job created for an approved requisition
     *
     * @return string
     */
    public function getJob() : string
    {
        return $this->job;
    }
    /**
     * Link to job created for an approved requisition
     *
     * @param string $job
     *
     * @return self
     */
    public function setJob(string $job) : self
    {
        $this->job = $job;
        return $this;
    }
    /**
     * Link to requisition approval history
     *
     * @return string
     */
    public function getHistory() : string
    {
        return $this->history;
    }
    /**
     * Link to requisition approval history
     *
     * @param string $history
     *
     * @return self
     */
    public function setHistory(string $history) : self
    {
        $this->history = $history;
        return $this;
    }
    /**
     * Notes
     *
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }
    /**
     * Notes
     *
     * @param string $notes
     *
     * @return self
     */
    public function setNotes(string $notes) : self
    {
        $this->notes = $notes;
        return $this;
    }
}