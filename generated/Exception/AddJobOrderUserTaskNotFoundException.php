<?php

namespace Varspool\JobAdder\V2\Exception;

class AddJobOrderUserTaskNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Job was not found', 404);
    }
}