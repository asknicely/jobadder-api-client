<?php

namespace Varspool\JobAdder\V2\Model;

class NoteTypeDefaultModel
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
     * @var bool
     */
    protected $note;
    /**
     * 
     *
     * @var bool
     */
    protected $email;
    /**
     * 
     *
     * @var bool
     */
    protected $sms;
    /**
     * 
     *
     * @return bool
     */
    public function getNote() : bool
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param bool $note
     *
     * @return self
     */
    public function setNote(bool $note) : self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEmail() : bool
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param bool $email
     *
     * @return self
     */
    public function setEmail(bool $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSms() : bool
    {
        return $this->sms;
    }
    /**
     * 
     *
     * @param bool $sms
     *
     * @return self
     */
    public function setSms(bool $sms) : self
    {
        $this->initialized['sms'] = true;
        $this->sms = $sms;
        return $this;
    }
}