<?php

namespace Varspool\JobAdder\V2\Model;

class SetCandidateStatusCommand
{
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
        $this->note = $note;
        return $this;
    }
}