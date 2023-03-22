<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderSkillTags
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
        $this->initialized['matchAll'] = true;
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
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
}