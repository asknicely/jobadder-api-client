<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderInvoiceStageModel
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
        $this->initialized['stageId'] = true;
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}