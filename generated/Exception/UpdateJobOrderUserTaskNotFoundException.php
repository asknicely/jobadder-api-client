<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateJobOrderUserTaskNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Job user task was not found', 404);
    }
}