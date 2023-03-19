<?php

namespace Varspool\JobAdder\V2\Exception;

class GetUserOfficeNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested user office was not found', 404);
    }
}