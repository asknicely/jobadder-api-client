<?php

namespace Varspool\JobAdder\V2\Model;

class JobApplicationWorkflowModel
{
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
        $this->progress = $progress;
        return $this;
    }
}