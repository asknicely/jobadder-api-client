<?php

namespace Varspool\JobAdder\V2\Exception;

class GetUserGroupNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested user group was not found', 404);
    }
}