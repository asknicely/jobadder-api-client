<?php

namespace Varspool\JobAdder\V2\Exception;

class MarkCompleteUserTaskNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('User task was not found', 404);
    }
}