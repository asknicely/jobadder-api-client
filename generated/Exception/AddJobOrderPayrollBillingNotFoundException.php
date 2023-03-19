<?php

namespace Varspool\JobAdder\V2\Exception;

class AddJobOrderPayrollBillingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Job Order was not found', 404);
    }
}