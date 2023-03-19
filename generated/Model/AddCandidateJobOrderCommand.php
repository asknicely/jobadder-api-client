<?php

namespace Varspool\JobAdder\V2\Model;

class AddCandidateJobOrderCommand
{
    /**
     * 
     *
     * @var int[]
     */
    protected $jobId;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @return int[]
     */
    public function getJobId() : array
    {
        return $this->jobId;
    }
    /**
     * 
     *
     * @param int[] $jobId
     *
     * @return self
     */
    public function setJobId(array $jobId) : self
    {
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
}