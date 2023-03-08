<?php

namespace Varspool\JobAdder\V2\Model;

class SkillCategoryModel
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
    protected $skillId;
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
    public function getSkillId() : int
    {
        return $this->skillId;
    }
    /**
     * 
     *
     * @param int $skillId
     *
     * @return self
     */
    public function setSkillId(int $skillId) : self
    {
        $this->initialized['skillId'] = true;
        $this->skillId = $skillId;
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