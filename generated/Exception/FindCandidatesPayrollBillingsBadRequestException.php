<?php

namespace Varspool\JobAdder\V2\Exception;

class FindCandidatesPayrollBillingsBadRequestException extends \RuntimeException implements ClientException
{
    private $errorModel;
    public function __construct(\Varspool\JobAdder\V2\Model\ErrorModel $errorModel)
    {
        parent::__construct('Requested list of candidates payroll billing exceeds the limit of 500 records', 400);
        $this->errorModel = $errorModel;
    }
    public function getErrorModel()
    {
        return $this->errorModel;
    }
}