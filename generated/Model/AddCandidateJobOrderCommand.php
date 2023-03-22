<?php

namespace Varspool\JobAdder\V2\Model;

class AddCandidateJobOrderCommand
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
        $this->initialized['jobId'] = true;
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
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
}