<?php

namespace Varspool\JobAdder\V2\Model;

class UpdateCandidateSkillsCommand
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
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
}