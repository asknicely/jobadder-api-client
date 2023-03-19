<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateCompanyAddressNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Company address not found', 404);
    }
}