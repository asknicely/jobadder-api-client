<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderSubCategoryModel
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
}