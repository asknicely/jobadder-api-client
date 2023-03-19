<?php

namespace Varspool\JobAdder\V2\Model;

class CompanyMatchedByPhoneModel
{
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
        $this->lastNoteAt = $lastNoteAt;
        return $this;
    }
}