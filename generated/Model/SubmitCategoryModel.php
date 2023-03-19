<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCategoryModel
{
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
        $this->subCategoryId = $subCategoryId;
        return $this;
    }
}