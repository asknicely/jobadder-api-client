<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationStatusByWorkflowModel
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
     * Name of the workflow stage
     *
     * @var string
     */
    protected $stage;
    /**
     * Position in the workflow
     *
     * @var int
     */
    protected $stageIndex;
    /**
     * [Obsolete] Please reference stageIndex instead
     *
     * @var int
     */
    protected $step;
    /**
     * General progress indicator
     *
     * @var string
     */
    protected $progress;
    /**
     * Ordered status list for this workflow stage
     *
     * @var JobApplicationStatusNameModel[]
     */
    protected $status;
    /**
     * Name of the workflow stage
     *
     * @return string
     */
    public function getStage() : string
    {
        return $this->stage;
    }
    /**
     * Name of the workflow stage
     *
     * @param string $stage
     *
     * @return self
     */
    public function setStage(string $stage) : self
    {
        $this->initialized['stage'] = true;
        $this->stage = $stage;
        return $this;
    }
    /**
     * Position in the workflow
     *
     * @return int
     */
    public function getStageIndex() : int
    {
        return $this->stageIndex;
    }
    /**
     * Position in the workflow
     *
     * @param int $stageIndex
     *
     * @return self
     */
    public function setStageIndex(int $stageIndex) : self
    {
        $this->initialized['stageIndex'] = true;
        $this->stageIndex = $stageIndex;
        return $this;
    }
    /**
     * [Obsolete] Please reference stageIndex instead
     *
     * @return int
     */
    public function getStep() : int
    {
        return $this->step;
    }
    /**
     * [Obsolete] Please reference stageIndex instead
     *
     * @param int $step
     *
     * @return self
     */
    public function setStep(int $step) : self
    {
        $this->initialized['step'] = true;
        $this->step = $step;
        return $this;
    }
    /**
     * General progress indicator
     *
     * @return string
     */
    public function getProgress() : string
    {
        return $this->progress;
    }
    /**
     * General progress indicator
     *
     * @param string $progress
     *
     * @return self
     */
    public function setProgress(string $progress) : self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;
        return $this;
    }
    /**
     * Ordered status list for this workflow stage
     *
     * @return JobApplicationStatusNameModel[]
     */
    public function getStatus() : array
    {
        return $this->status;
    }
    /**
     * Ordered status list for this workflow stage
     *
     * @param JobApplicationStatusNameModel[] $status
     *
     * @return self
     */
    public function setStatus(array $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}