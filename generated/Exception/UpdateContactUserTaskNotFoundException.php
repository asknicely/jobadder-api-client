<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateContactUserTaskNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Contact user task was not found', 404);
    }
}