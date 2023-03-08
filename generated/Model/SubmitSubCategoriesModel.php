<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitSubCategoriesModel
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
    * Sub-category for detailed skill classification.<br />
    Specify a subCategoryId without skills for a broad classification.
    This will remove all previously linked skills associated with the sub-category.
    *
    * @var int
    */
    protected $subCategoryId;
    /**
     * Optional list of skills associated with the sub-category for detailed classification
     *
     * @var SubmitSkillsModel[]
     */
    protected $skills;
    /**
    * Sub-category for detailed skill classification.<br />
    Specify a subCategoryId without skills for a broad classification.
    This will remove all previously linked skills associated with the sub-category.
    *
    * @return int
    */
    public function getSubCategoryId() : int
    {
        return $this->subCategoryId;
    }
    /**
    * Sub-category for detailed skill classification.<br />
    Specify a subCategoryId without skills for a broad classification.
    This will remove all previously linked skills associated with the sub-category.
    *
    * @param int $subCategoryId
    *
    * @return self
    */
    public function setSubCategoryId(int $subCategoryId) : self
    {
        $this->initialized['subCategoryId'] = true;
        $this->subCategoryId = $subCategoryId;
        return $this;
    }
    /**
     * Optional list of skills associated with the sub-category for detailed classification
     *
     * @return SubmitSkillsModel[]
     */
    public function getSkills() : array
    {
        return $this->skills;
    }
    /**
     * Optional list of skills associated with the sub-category for detailed classification
     *
     * @param SubmitSkillsModel[] $skills
     *
     * @return self
     */
    public function setSkills(array $skills) : self
    {
        $this->initialized['skills'] = true;
        $this->skills = $skills;
        return $this;
    }
}