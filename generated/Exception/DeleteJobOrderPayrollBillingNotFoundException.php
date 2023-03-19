<?php

namespace Varspool\JobAdder\V2\Exception;

class DeleteJobOrderPayrollBillingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job rate card id was not found', 404);
    }
}