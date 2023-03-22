<?php

namespace Varspool\JobAdder\V2\Model;

class AddCompanyCommand
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $parentCompanyId;
    /**
     * 
     *
     * @var string
     */
    protected $summary;
    /**
     * Company LegalName
     *
     * @var string
     */
    protected $legalName;
    /**
     * 
     *
     * @var string[]
     */
    protected $social;
    /**
     * Company status
     *
     * @var int
     */
    protected $statusId;
    /**
     * Custom field values. Only the specified fields will be updated, each fieldId can specified once.
     *
     * @var SubmitCustomFieldValueModel[]
     */
    protected $custom;
    /**
     * 
     *
     * @var int
     */
    protected $ownerUserId;
    /**
     * 
     *
     * @var int[]
     */
    protected $recruiterUserId;
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
     * @return int
     */
    public function getParentCompanyId() : int
    {
        return $this->parentCompanyId;
    }
    /**
     * 
     *
     * @param int $parentCompanyId
     *
     * @return self
     */
    public function setParentCompanyId(int $parentCompanyId) : self
    {
        $this->initialized['parentCompanyId'] = true;
        $this->parentCompanyId = $parentCompanyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(string $summary) : self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
    /**
     * Company LegalName
     *
     * @return string
     */
    public function getLegalName() : string
    {
        return $this->legalName;
    }
    /**
     * Company LegalName
     *
     * @param string $legalName
     *
     * @return self
     */
    public function setLegalName(string $legalName) : self
    {
        $this->initialized['legalName'] = true;
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getSocial() : iterable
    {
        return $this->social;
    }
    /**
     * 
     *
     * @param string[] $social
     *
     * @return self
     */
    public function setSocial(iterable $social) : self
    {
        $this->initialized['social'] = true;
        $this->social = $social;
        return $this;
    }
    /**
     * Company status
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * Company status
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * Custom field values. Only the specified fields will be updated, each fieldId can specified once.
     *
     * @return SubmitCustomFieldValueModel[]
     */
    public function getCustom() : array
    {
        return $this->custom;
    }
    /**
     * Custom field values. Only the specified fields will be updated, each fieldId can specified once.
     *
     * @param SubmitCustomFieldValueModel[] $custom
     *
     * @return self
     */
    public function setCustom(array $custom) : self
    {
        $this->initialized['custom'] = true;
        $this->custom = $custom;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOwnerUserId() : int
    {
        return $this->ownerUserId;
    }
    /**
     * 
     *
     * @param int $ownerUserId
     *
     * @return self
     */
    public function setOwnerUserId(int $ownerUserId) : self
    {
        $this->initialized['ownerUserId'] = true;
        $this->ownerUserId = $ownerUserId;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getRecruiterUserId() : array
    {
        return $this->recruiterUserId;
    }
    /**
     * 
     *
     * @param int[] $recruiterUserId
     *
     * @return self
     */
    public function setRecruiterUserId(array $recruiterUserId) : self
    {
        $this->initialized['recruiterUserId'] = true;
        $this->recruiterUserId = $recruiterUserId;
        return $this;
    }
}