<?php

namespace Varspool\JobAdder\V2\Model;

class CategoryModel
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var SubCategoryModel[]
     */
    protected $subCategories;
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
     * @return SubCategoryModel[]
     */
    public function getSubCategories() : array
    {
        return $this->subCategories;
    }
    /**
     * 
     *
     * @param SubCategoryModel[] $subCategories
     *
     * @return self
     */
    public function setSubCategories(array $subCategories) : self
    {
        $this->subCategories = $subCategories;
        return $this;
    }
}