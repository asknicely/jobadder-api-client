<?php

namespace Varspool\JobAdder\V2\Model;

class CandidatePayrollBillingModel
{
    /**
     * Candidate Id
     *
     * @var int
     */
    protected $candidateId;
    /**
     * Candidate ExternalID
     *
     * @var string
     */
    protected $externalCandidateId;
    /**
     * Office Code
     *
     * @var string
     */
    protected $office;
    /**
     * Position
     *
     * @var string
     */
    protected $position;
    /**
     * Skill Group
     *
     * @var string
     */
    protected $skillGroup;
    /**
     * Candidate Id
     *
     * @return int
     */
    public function getCandidateId() : int
    {
        return $this->candidateId;
    }
    /**
     * Candidate Id
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
     * Candidate ExternalID
     *
     * @return string
     */
    public function getExternalCandidateId() : string
    {
        return $this->externalCandidateId;
    }
    /**
     * Candidate ExternalID
     *
     * @param string $externalCandidateId
     *
     * @return self
     */
    public function setExternalCandidateId(string $externalCandidateId) : self
    {
        $this->externalCandidateId = $externalCandidateId;
        return $this;
    }
    /**
     * Office Code
     *
     * @return string
     */
    public function getOffice() : string
    {
        return $this->office;
    }
    /**
     * Office Code
     *
     * @param string $office
     *
     * @return self
     */
    public function setOffice(string $office) : self
    {
        $this->office = $office;
        return $this;
    }
    /**
     * Position
     *
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * Position
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Skill Group
     *
     * @return string
     */
    public function getSkillGroup() : string
    {
        return $this->skillGroup;
    }
    /**
     * Skill Group
     *
     * @param string $skillGroup
     *
     * @return self
     */
    public function setSkillGroup(string $skillGroup) : self
    {
        $this->skillGroup = $skillGroup;
        return $this;
    }
}