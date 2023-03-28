<?php

namespace AskNicely\JobAdder\Generated\Model;

class CategoryListRepresentation
{
    /**
     * @var CategoryModel[]
     */
    protected $items;

    /**
     * @return CategoryModel[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param CategoryModel[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }
}
