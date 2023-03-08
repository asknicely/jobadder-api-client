<?php

namespace Varspool\JobAdder\V2\Model;

class AddNoteCommand
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
    protected $type;
    /**
     * Note content
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var int[]
     */
    protected $jobId;
    /**
     * 
     *
     * @var int[]
     */
    protected $requisitionId;
    /**
     * 
     *
     * @var int[]
     */
    protected $candidateId;
    /**
     * 
     *
     * @var int[]
     */
    protected $applicationId;
    /**
     * 
     *
     * @var int[]
     */
    protected $placementId;
    /**
     * 
     *
     * @var int[]
     */
    protected $companyId;
    /**
     * 
     *
     * @var int[]
     */
    protected $contactId;
    /**
     * Optional reference string used to identify a note or group of notes
     *
     * @var string
     */
    protected $reference;
    /**
    * The user creating the note if not the authenticated user.<br />
    Specify either userId or email.
    *
    * @var SubmitUserModel
    */
    protected $createdBy;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Note content
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * Note content
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
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
     * @return int[]
     */
    public function getRequisitionId() : array
    {
        return $this->requisitionId;
    }
    /**
     * 
     *
     * @param int[] $requisitionId
     *
     * @return self
     */
    public function setRequisitionId(array $requisitionId) : self
    {
        $this->initialized['requisitionId'] = true;
        $this->requisitionId = $requisitionId;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getCandidateId() : array
    {
        return $this->candidateId;
    }
    /**
     * 
     *
     * @param int[] $candidateId
     *
     * @return self
     */
    public function setCandidateId(array $candidateId) : self
    {
        $this->initialized['candidateId'] = true;
        $this->candidateId = $candidateId;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getApplicationId() : array
    {
        return $this->applicationId;
    }
    /**
     * 
     *
     * @param int[] $applicationId
     *
     * @return self
     */
    public function setApplicationId(array $applicationId) : self
    {
        $this->initialized['applicationId'] = true;
        $this->applicationId = $applicationId;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getPlacementId() : array
    {
        return $this->placementId;
    }
    /**
     * 
     *
     * @param int[] $placementId
     *
     * @return self
     */
    public function setPlacementId(array $placementId) : self
    {
        $this->initialized['placementId'] = true;
        $this->placementId = $placementId;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getCompanyId() : array
    {
        return $this->companyId;
    }
    /**
     * 
     *
     * @param int[] $companyId
     *
     * @return self
     */
    public function setCompanyId(array $companyId) : self
    {
        $this->initialized['companyId'] = true;
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getContactId() : array
    {
        return $this->contactId;
    }
    /**
     * 
     *
     * @param int[] $contactId
     *
     * @return self
     */
    public function setContactId(array $contactId) : self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * Optional reference string used to identify a note or group of notes
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * Optional reference string used to identify a note or group of notes
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
    * The user creating the note if not the authenticated user.<br />
    Specify either userId or email.
    *
    * @return SubmitUserModel
    */
    public function getCreatedBy() : SubmitUserModel
    {
        return $this->createdBy;
    }
    /**
    * The user creating the note if not the authenticated user.<br />
    Specify either userId or email.
    *
    * @param SubmitUserModel $createdBy
    *
    * @return self
    */
    public function setCreatedBy(SubmitUserModel $createdBy) : self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
}