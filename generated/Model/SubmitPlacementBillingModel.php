<?php

namespace Varspool\JobAdder\V2\Model;

class SubmitPlacementBillingModel
{
    /**
     * 
     *
     * @var int
     */
    protected $contactId;
    /**
     * 
     *
     * @var string
     */
    protected $addressId;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * PO Number/Reference
     *
     * @var string
     */
    protected $orderRef;
    /**
     * Invoice Number/Reference
     *
     * @var string
     */
    protected $invoiceRef;
    /**
     * Billing payment terms
     *
     * @var string
     */
    protected $terms;
    /**
     * Payment due date
     *
     * @var \DateTime
     */
    protected $dueDate;
    /**
     * 
     *
     * @return int
     */
    public function getContactId() : int
    {
        return $this->contactId;
    }
    /**
     * 
     *
     * @param int $contactId
     *
     * @return self
     */
    public function setContactId(int $contactId) : self
    {
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAddressId() : string
    {
        return $this->addressId;
    }
    /**
     * 
     *
     * @param string $addressId
     *
     * @return self
     */
    public function setAddressId(string $addressId) : self
    {
        $this->addressId = $addressId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * PO Number/Reference
     *
     * @return string
     */
    public function getOrderRef() : string
    {
        return $this->orderRef;
    }
    /**
     * PO Number/Reference
     *
     * @param string $orderRef
     *
     * @return self
     */
    public function setOrderRef(string $orderRef) : self
    {
        $this->orderRef = $orderRef;
        return $this;
    }
    /**
     * Invoice Number/Reference
     *
     * @return string
     */
    public function getInvoiceRef() : string
    {
        return $this->invoiceRef;
    }
    /**
     * Invoice Number/Reference
     *
     * @param string $invoiceRef
     *
     * @return self
     */
    public function setInvoiceRef(string $invoiceRef) : self
    {
        $this->invoiceRef = $invoiceRef;
        return $this;
    }
    /**
     * Billing payment terms
     *
     * @return string
     */
    public function getTerms() : string
    {
        return $this->terms;
    }
    /**
     * Billing payment terms
     *
     * @param string $terms
     *
     * @return self
     */
    public function setTerms(string $terms) : self
    {
        $this->terms = $terms;
        return $this;
    }
    /**
     * Payment due date
     *
     * @return \DateTime
     */
    public function getDueDate() : \DateTime
    {
        return $this->dueDate;
    }
    /**
     * Payment due date
     *
     * @param \DateTime $dueDate
     *
     * @return self
     */
    public function setDueDate(\DateTime $dueDate) : self
    {
        $this->dueDate = $dueDate;
        return $this;
    }
}