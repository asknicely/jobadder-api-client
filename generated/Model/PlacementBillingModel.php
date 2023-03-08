<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementBillingModel
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
     * @var ContactNameModel
     */
    protected $contact;
    /**
     * 
     *
     * @var CompanyAddressModel
     */
    protected $address;
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
     * @return ContactNameModel
     */
    public function getContact() : ContactNameModel
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param ContactNameModel $contact
     *
     * @return self
     */
    public function setContact(ContactNameModel $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyAddressModel
     */
    public function getAddress() : CompanyAddressModel
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param CompanyAddressModel $address
     *
     * @return self
     */
    public function setAddress(CompanyAddressModel $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
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
        $this->initialized['email'] = true;
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
        $this->initialized['orderRef'] = true;
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
        $this->initialized['invoiceRef'] = true;
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
        $this->initialized['terms'] = true;
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
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;
        return $this;
    }
}