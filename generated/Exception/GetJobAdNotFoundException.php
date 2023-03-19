<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobAdNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job ad was not found', 404);
    }
}