<?php

namespace Varspool\JobAdder\V2\Model;

class SetPlacementStatusCommand
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
     * Status Id
     *
     * @var int
     */
    protected $statusId;
    /**
     * Optional note
     *
     * @var SubmitStatusNoteModel
     */
    protected $note;
    /**
     * Status Id
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * Status Id
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * Optional note
     *
     * @return SubmitStatusNoteModel
     */
    public function getNote() : SubmitStatusNoteModel
    {
        return $this->note;
    }
    /**
     * Optional note
     *
     * @param SubmitStatusNoteModel $note
     *
     * @return self
     */
    public function setNote(SubmitStatusNoteModel $note) : self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
}