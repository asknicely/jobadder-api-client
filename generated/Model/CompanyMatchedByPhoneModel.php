<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyMatchedByPhoneModel
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
     * @var MatchedPhoneNumberModel
     */
    protected $match;
    /**
     * 
     *
     * @var int
     */
    protected $companyId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
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
    protected $lastNoteAt;
    /**
     * 
     *
     * @return MatchedPhoneNumberModel
     */
    public function getMatch() : MatchedPhoneNumberModel
    {
        return $this->match;
    }
    /**
     * 
     *
     * @param MatchedPhoneNumberModel $match
     *
     * @return self
     */
    public function setMatch(MatchedPhoneNumberModel $match) : self
    {
        $this->initialized['match'] = true;
        $this->match = $match;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCompanyId() : int
    {
        return $this->companyId;
    }
    /**
     * 
     *
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId(int $companyId) : self
    {
        $this->initialized['companyId'] = true;
        $this->companyId = $companyId;
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
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getLastNoteAt() : \DateTime
    {
        return $this->lastNoteAt;
    }
    /**
     * 
     *
     * @param \DateTime $lastNoteAt
     *
     * @return self
     */
    public function setLastNoteAt(\DateTime $lastNoteAt) : self
    {
        $this->initialized['lastNoteAt'] = true;
        $this->lastNoteAt = $lastNoteAt;
        return $this;
    }
}