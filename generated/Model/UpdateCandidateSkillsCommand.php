<?php

namespace Varspool\JobAdder\V2\Model;

class UpdateCandidateSkillsCommand
{
    /**
    * Skill categories to update for this candidate.<br />
    Only skills and sub-categories for the submitted categories will be modified.
    *
    * @var SubmitCategoriesModel[]
    */
    protected $categories;
    /**
    * Skill categories to update for this candidate.<br />
    Only skills and sub-categories for the submitted categories will be modified.
    *
    * @return SubmitCategoriesModel[]
    */
    public function getCategories() : array
    {
        return $this->categories;
    }
    /**
    * Skill categories to update for this candidate.<br />
    Only skills and sub-categories for the submitted categories will be modified.
    *
    * @param SubmitCategoriesModel[] $categories
    *
    * @return self
    */
    public function setCategories(array $categories) : self
    {
        $this->categories = $categories;
        return $this;
    }
}