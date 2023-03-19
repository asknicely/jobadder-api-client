<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitCategoriesModel
{
    /**
    * Category to add or update in the skill coding.<br />
    Specify a categoryId without subCategories for a broad classification.
    This will remove all previously linked sub-categories associated with the category.
    *
    * @var int
    */
    protected $categoryId;
    /**
     * Optional list of sub-categories and skills for detailed skill classification
     *
     * @var SubmitSubCategoriesModel[]
     */
    protected $subCategories;
    /**
    * Category to add or update in the skill coding.<br />
    Specify a categoryId without subCategories for a broad classification.
    This will remove all previously linked sub-categories associated with the category.
    *
    * @return int
    */
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }
    /**
    * Category to add or update in the skill coding.<br />
    Specify a categoryId without subCategories for a broad classification.
    This will remove all previously linked sub-categories associated with the category.
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
     * Optional list of sub-categories and skills for detailed skill classification
     *
     * @return SubmitSubCategoriesModel[]
     */
    public function getSubCategories() : array
    {
        return $this->subCategories;
    }
    /**
     * Optional list of sub-categories and skills for detailed skill classification
     *
     * @param SubmitSubCategoriesModel[] $subCategories
     *
     * @return self
     */
    public function setSubCategories(array $subCategories) : self
    {
        $this->subCategories = $subCategories;
        return $this;
    }
}