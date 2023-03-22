<?php

namespace Varspool\JobAdder\V2\Model;

class AddContactNoteCommand
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