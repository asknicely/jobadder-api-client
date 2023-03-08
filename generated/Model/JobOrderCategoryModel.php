<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderCategoryModel
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
     * @var int
     */
    protected $categoryId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var JobOrderSubCategoryModel
     */
    protected $subCategory;
    /**
     * 
     *
     * @return int
     */
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }
    /**
     * 
     *
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId(int $categoryId) : self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return JobOrderSubCategoryModel
     */
    public function getSubCategory() : JobOrderSubCategoryModel
    {
        return $this->subCategory;
    }
    /**
     * 
     *
     * @param JobOrderSubCategoryModel $subCategory
     *
     * @return self
     */
    public function setSubCategory(JobOrderSubCategoryModel $subCategory) : self
    {
        $this->initialized['subCategory'] = true;
        $this->subCategory = $subCategory;
        return $this;
    }
}