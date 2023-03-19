<?php

namespace Varspool\JobAdder\V2\Model;

class RemoveCategoriesModel
{
    /**
    * Category to remove.<br />
    Specify a categoryId without subCategories to remove the category and all previously
    linked sub-categories associated with the category.
    *
    * @var int
    */
    protected $categoryId;
    /**
     * Optional list of sub-categories and skills to remove.
     *
     * @var RemoveSubCategoriesModel[]
     */
    protected $subCategories;
    /**
    * Category to remove.<br />
    Specify a categoryId without subCategories to remove the category and all previously
    linked sub-categories associated with the category.
    *
    * @return int
    */
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }
    /**
    * Category to remove.<br />
    Specify a categoryId without subCategories to remove the category and all previously
    linked sub-categories associated with the category.
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
     * Optional list of sub-categories and skills to remove.
     *
     * @return RemoveSubCategoriesModel[]
     */
    public function getSubCategories() : array
    {
        return $this->subCategories;
    }
    /**
     * Optional list of sub-categories and skills to remove.
     *
     * @param RemoveSubCategoriesModel[] $subCategories
     *
     * @return self
     */
    public function setSubCategories(array $subCategories) : self
    {
        $this->subCategories = $subCategories;
        return $this;
    }
}