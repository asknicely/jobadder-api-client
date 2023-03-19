<?php

namespace Varspool\JobAdder\V2\Model;

class AddCandidateNoteCommand
{
    /**
     * Note type
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
     * Optional list of related job applications to link to the note
     *
     * @var int[]
     */
    protected $applicationId;
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
     * Note type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Note type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
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
        $this->text = $text;
        return $this;
    }
    /**
     * Optional list of related job applications to link to the note
     *
     * @return int[]
     */
    public function getApplicationId() : array
    {
        return $this->applicationId;
    }
    /**
     * Optional list of related job applications to link to the note
     *
     * @param int[] $applicationId
     *
     * @return self
     */
    public function setApplicationId(array $applicationId) : self
    {
        $this->applicationId = $applicationId;
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
        $this->createdBy = $createdBy;
        return $this;
    }
}