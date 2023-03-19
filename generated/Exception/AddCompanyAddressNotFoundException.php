<?php

namespace Varspool\JobAdder\V2\Exception;

class AddCompanyAddressNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Company not found', 404);
    }
}