<?php

namespace Varspool\JobAdder\V2\Exception;

class GetRequisitionNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested requisition was not found', 404);
    }
}