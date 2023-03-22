<?php

namespace Varspool\JobAdder\V2\Model;

class JobOrderSentInvoiceModel
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
    protected $billingContactNames;
    /**
     * 
     *
     * @var string
     */
    protected $billingContactEmails;
    /**
     * 
     *
     * @var string
     */
    protected $poNumber;
    /**
     * 
     *
     * @var int
     */
    protected $paymentTermsDays;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $dueDate;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $sentAt;
    /**
     * 
     *
     * @var UserNameModel
     */
    protected $sentBy;
    /**
     * 
     *
     * @return string
     */
    public function getBillingContactNames() : string
    {
        return $this->billingContactNames;
    }
    /**
     * 
     *
     * @param string $billingContactNames
     *
     * @return self
     */
    public function setBillingContactNames(string $billingContactNames) : self
    {
        $this->initialized['billingContactNames'] = true;
        $this->billingContactNames = $billingContactNames;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBillingContactEmails() : string
    {
        return $this->billingContactEmails;
    }
    /**
     * 
     *
     * @param string $billingContactEmails
     *
     * @return self
     */
    public function setBillingContactEmails(string $billingContactEmails) : self
    {
        $this->initialized['billingContactEmails'] = true;
        $this->billingContactEmails = $billingContactEmails;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPoNumber() : string
    {
        return $this->poNumber;
    }
    /**
     * 
     *
     * @param string $poNumber
     *
     * @return self
     */
    public function setPoNumber(string $poNumber) : self
    {
        $this->initialized['poNumber'] = true;
        $this->poNumber = $poNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPaymentTermsDays() : int
    {
        return $this->paymentTermsDays;
    }
    /**
     * 
     *
     * @param int $paymentTermsDays
     *
     * @return self
     */
    public function setPaymentTermsDays(int $paymentTermsDays) : self
    {
        $this->initialized['paymentTermsDays'] = true;
        $this->paymentTermsDays = $paymentTermsDays;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDueDate() : \DateTime
    {
        return $this->dueDate;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return \DateTime
     */
    public function getSentAt() : \DateTime
    {
        return $this->sentAt;
    }
    /**
     * 
     *
     * @param \DateTime $sentAt
     *
     * @return self
     */
    public function setSentAt(\DateTime $sentAt) : self
    {
        $this->initialized['sentAt'] = true;
        $this->sentAt = $sentAt;
        return $this;
    }
    /**
     * 
     *
     * @return UserNameModel
     */
    public function getSentBy() : UserNameModel
    {
        return $this->sentBy;
    }
    /**
     * 
     *
     * @param UserNameModel $sentBy
     *
     * @return self
     */
    public function setSentBy(UserNameModel $sentBy) : self
    {
        $this->initialized['sentBy'] = true;
        $this->sentBy = $sentBy;
        return $this;
    }
}