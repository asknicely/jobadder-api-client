<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceStageModel
{
    /**
     * 
     *
     * @var int
     */
    protected $stageId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return int
     */
    public function getStageId() : int
    {
        return $this->stageId;
    }
    /**
     * 
     *
     * @param int $stageId
     *
     * @return self
     */
    public function setStageId(int $stageId) : self
    {
        $this->stageId = $stageId;
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
}