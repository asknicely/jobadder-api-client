<?php

namespace Varspool\JobAdder\V2\Model;

class UpdateNoteCommand
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
}