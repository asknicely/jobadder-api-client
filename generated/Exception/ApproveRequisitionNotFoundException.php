<?php

namespace Varspool\JobAdder\V2\Exception;

class ApproveRequisitionNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requisition was not found', 404);
    }
}