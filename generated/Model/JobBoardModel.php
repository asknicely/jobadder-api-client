<?php

namespace Varspool\JobAdder\V2\Model;

class JobBoardModel
{
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
     * @var JobBoardPortalModel
     */
    protected $portal;
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
        $this->reference = $reference;
        return $this;
    }
    /**
     * 
     *
     * @return JobBoardPortalModel
     */
    public function getPortal() : JobBoardPortalModel
    {
        return $this->portal;
    }
    /**
     * 
     *
     * @param JobBoardPortalModel $portal
     *
     * @return self
     */
    public function setPortal(JobBoardPortalModel $portal) : self
    {
        $this->portal = $portal;
        return $this;
    }
}