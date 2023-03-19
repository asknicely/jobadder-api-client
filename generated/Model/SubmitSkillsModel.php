<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitSkillsModel
{
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
        $this->skillId = $skillId;
        return $this;
    }
}