<?php

namespace Varspool\JobAdder\V2\Model;

class RemoveCandidateSkillsCommand
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
     * Skill categories to remove from this candidate.
     *
     * @var RemoveCategoriesModel[]
     */
    protected $categories;
    /**
     * Skill categories to remove from this candidate.
     *
     * @return RemoveCategoriesModel[]
     */
    public function getCategories() : array
    {
        return $this->categories;
    }
    /**
     * Skill categories to remove from this candidate.
     *
     * @param RemoveCategoriesModel[] $categories
     *
     * @return self
     */
    public function setCategories(array $categories) : self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
}