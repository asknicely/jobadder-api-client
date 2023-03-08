<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCategoryModel
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
     * @var int
     */
    protected $subCategoryId;
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
        $this->initialized['subCategoryId'] = true;
        $this->subCategoryId = $subCategoryId;
        return $this;
    }
}