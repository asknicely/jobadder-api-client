<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateCompanyLogoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Company was not found', 404);
    }
}