<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardSummaryModel
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
     * @var int
     */
    protected $boardId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $reference;
    /**
     * 
     *
     * @return int
     */
    public function getBoardId() : int
    {
        return $this->boardId;
    }
    /**
     * 
     *
     * @param int $boardId
     *
     * @return self
     */
    public function setBoardId(int $boardId) : self
    {
        $this->initialized['boardId'] = true;
        $this->boardId = $boardId;
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * 
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
}