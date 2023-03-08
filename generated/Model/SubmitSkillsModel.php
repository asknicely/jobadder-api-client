<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitSkillsModel
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
     * Skill for detailed skill classification.
     *
     * @var int
     */
    protected $skillId;
    /**
     * Skill for detailed skill classification.
     *
     * @return int
     */
    public function getSkillId() : int
    {
        return $this->skillId;
    }
    /**
     * Skill for detailed skill classification.
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
}