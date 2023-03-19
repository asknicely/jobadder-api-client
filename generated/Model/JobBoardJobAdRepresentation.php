<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardJobAdRepresentation
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
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var JobAdScreeningQuestionModel[]
     */
    protected $screening;
    /**
     * 
     *
     * @var JobAdPortalModel
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
     * @var JobBoardJobAdLinks
     */
    protected $links;
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
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return JobAdScreeningQuestionModel[]
     */
    public function getScreening() : array
    {
        return $this->screening;
    }
    /**
     * 
     *
     * @param JobAdScreeningQuestionModel[] $screening
     *
     * @return self
     */
    public function setScreening(array $screening) : self
    {
        $this->screening = $screening;
        return $this;
    }
    /**
     * 
     *
     * @return JobAdPortalModel
     */
    public function getPortal() : JobAdPortalModel
    {
        return $this->portal;
    }
    /**
     * 
     *
     * @param JobAdPortalModel $portal
     *
     * @return self
     */
    public function setPortal(JobAdPortalModel $portal) : self
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
    /**
     * 
     *
     * @return JobBoardJobAdLinks
     */
    public function getLinks() : JobBoardJobAdLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param JobBoardJobAdLinks $links
     *
     * @return self
     */
    public function setLinks(JobBoardJobAdLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}