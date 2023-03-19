<?php

namespace Varspool\JobAdder\V2\Exception;

class GetRequisitionCustomFieldItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested requisition custom field definition was not found', 404);
    }
}