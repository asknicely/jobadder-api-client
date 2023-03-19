<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobOrderPayrollBillingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job rate card id was not found', 404);
    }
}