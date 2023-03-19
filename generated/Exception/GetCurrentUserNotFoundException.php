<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCurrentUserNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Current user was not found (huh?)', 404);
    }
}