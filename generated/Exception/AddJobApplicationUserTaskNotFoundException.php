<?php

namespace Varspool\JobAdder\V2\Exception;

class AddJobApplicationUserTaskNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Application was not found', 404);
    }
}