<?php

namespace Varspool\JobAdder\V2\Model;

class RemoveCandidateSkillsCommand
{
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
        $this->categories = $categories;
        return $this;
    }
}