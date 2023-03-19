<?php

namespace Varspool\JobAdder\V2\Model;

class DeletedCandidateModel
{
    /**
     * 
     *
     * @var int
     */
    protected $candidateId;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $deletedAt;
    /**
     * 
     *
     * @return int
     */
    public function getCandidateId() : int
    {
        return $this->candidateId;
    }
    /**
     * 
     *
     * @param int $candidateId
     *
     * @return self
     */
    public function setCandidateId(int $candidateId) : self
    {
        $this->candidateId = $candidateId;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDeletedAt() : \DateTime
    {
        return $this->deletedAt;
    }
    /**
     * 
     *
     * @param \DateTime $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt) : self
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }
}