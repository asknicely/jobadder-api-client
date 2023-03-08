<?php

namespace Varspool\JobAdder\V2\Model;

class JobAdSummaryModel
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
    protected $adId;
    /**
     * 
     *
     * @var string
     */
    protected $state;
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
     * @var UserNameModel
     */
    protected $owner;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $postAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expireAt;
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
        $this->initialized['adId'] = true;
        $this->adId = $adId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
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
     * @return UserNameModel
     */
    public function getOwner() : UserNameModel
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param UserNameModel $owner
     *
     * @return self
     */
    public function setOwner(UserNameModel $owner) : self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getPostAt() : \DateTime
    {
        return $this->postAt;
    }
    /**
     * 
     *
     * @param \DateTime $postAt
     *
     * @return self
     */
    public function setPostAt(\DateTime $postAt) : self
    {
        $this->initialized['postAt'] = true;
        $this->postAt = $postAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpireAt() : \DateTime
    {
        return $this->expireAt;
    }
    /**
     * 
     *
     * @param \DateTime $expireAt
     *
     * @return self
     */
    public function setExpireAt(\DateTime $expireAt) : self
    {
        $this->initialized['expireAt'] = true;
        $this->expireAt = $expireAt;
        return $this;
    }
}