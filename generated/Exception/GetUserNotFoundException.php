<?php

namespace Varspool\JobAdder\V2\Exception;

class GetUserNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested user was not found', 404);
    }
}