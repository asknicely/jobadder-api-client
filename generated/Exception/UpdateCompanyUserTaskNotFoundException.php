<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateCompanyUserTaskNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Company user task was not found', 404);
    }
}