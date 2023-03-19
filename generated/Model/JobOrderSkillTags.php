<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderSkillTags
{
    /**
     * 
     *
     * @var bool
     */
    protected $matchAll;
    /**
     * 
     *
     * @var string[]
     */
    protected $tags;
    /**
     * 
     *
     * @return bool
     */
    public function getMatchAll() : bool
    {
        return $this->matchAll;
    }
    /**
     * 
     *
     * @param bool $matchAll
     *
     * @return self
     */
    public function setMatchAll(bool $matchAll) : self
    {
        $this->matchAll = $matchAll;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTags() : array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param string[] $tags
     *
     * @return self
     */
    public function setTags(array $tags) : self
    {
        $this->tags = $tags;
        return $this;
    }
}