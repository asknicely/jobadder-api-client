<?php

namespace Varspool\JobAdder\V2\Model;

class SkillCategoryModel
{
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
        $this->name = $name;
        return $this;
    }
}