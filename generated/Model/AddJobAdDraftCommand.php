<?php

namespace Varspool\JobAdder\V2\Model;

class AddJobAdDraftCommand
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
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $reference;
    /**
     * 
     *
     * @var string
     */
    protected $summary;
    /**
     * 
     *
     * @var string[]
     */
    protected $bulletPoints;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * Associated job
     *
     * @var int
     */
    protected $jobId;
    /**
     * 
     *
     * @var int
     */
    protected $ownerUserId;
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference) : self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(string $summary) : self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getBulletPoints() : array
    {
        return $this->bulletPoints;
    }
    /**
     * 
     *
     * @param string[] $bulletPoints
     *
     * @return self
     */
    public function setBulletPoints(array $bulletPoints) : self
    {
        $this->initialized['bulletPoints'] = true;
        $this->bulletPoints = $bulletPoints;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Associated job
     *
     * @return int
     */
    public function getJobId() : int
    {
        return $this->jobId;
    }
    /**
     * Associated job
     *
     * @param int $jobId
     *
     * @return self
     */
    public function setJobId(int $jobId) : self
    {
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOwnerUserId() : int
    {
        return $this->ownerUserId;
    }
    /**
     * 
     *
     * @param int $ownerUserId
     *
     * @return self
     */
    public function setOwnerUserId(int $ownerUserId) : self
    {
        $this->initialized['ownerUserId'] = true;
        $this->ownerUserId = $ownerUserId;
        return $this;
    }
}