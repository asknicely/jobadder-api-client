<?php

namespace Varspool\JobAdder\V2\Model;

class SubCategoryModel
{
    /**
     * 
     *
     * @var int
     */
    protected $subCategoryId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var SkillCategoryModel[]
     */
    protected $skills;
    /**
     * 
     *
     * @return int
     */
    public function getSubCategoryId() : int
    {
        return $this->subCategoryId;
    }
    /**
     * 
     *
     * @param int $subCategoryId
     *
     * @return self
     */
    public function setSubCategoryId(int $subCategoryId) : self
    {
        $this->subCategoryId = $subCategoryId;
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
    /**
     * 
     *
     * @return SkillCategoryModel[]
     */
    public function getSkills() : array
    {
        return $this->skills;
    }
    /**
     * 
     *
     * @param SkillCategoryModel[] $skills
     *
     * @return self
     */
    public function setSkills(array $skills) : self
    {
        $this->skills = $skills;
        return $this;
    }
}