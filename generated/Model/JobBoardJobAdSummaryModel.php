<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardJobAdSummaryModel
{
    /**
     * 
     *
     * @var int
     */
    protected $adId;
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
     * @var JobAdPortalSummaryModel
     */
    protected $portal;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $postedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * 
     *
     * @return int
     */
    public function getAdId() : int
    {
        return $this->adId;
    }
    /**
     * 
     *
     * @param int $adId
     *
     * @return self
     */
    public function setAdId(int $adId) : self
    {
        $this->adId = $adId;
        return $this;
    }
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
        $this->bulletPoints = $bulletPoints;
        return $this;
    }
    /**
     * 
     *
     * @return JobAdPortalSummaryModel
     */
    public function getPortal() : JobAdPortalSummaryModel
    {
        return $this->portal;
    }
    /**
     * 
     *
     * @param JobAdPortalSummaryModel $portal
     *
     * @return self
     */
    public function setPortal(JobAdPortalSummaryModel $portal) : self
    {
        $this->portal = $portal;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getPostedAt() : \DateTime
    {
        return $this->postedAt;
    }
    /**
     * 
     *
     * @param \DateTime $postedAt
     *
     * @return self
     */
    public function setPostedAt(\DateTime $postedAt) : self
    {
        $this->postedAt = $postedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpiresAt() : \DateTime
    {
        return $this->expiresAt;
    }
    /**
     * 
     *
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt) : self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
}